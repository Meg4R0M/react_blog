import React, { Component } from "react";
import { connect } from 'react-redux';
import ArticlesElements from '../elements/ArticlesElement';
import axios from "axios/index";
import { CircleLoader } from 'react-spinners';

class ArticlesContainer extends Component {

    constructor(props) {
        super(props);

        let currentHash = window.location.hash;

        this.state = {
            currentRoute: currentHash,
            articles: [],
            loading: true,
        };
    }

    getData(dataLink) {
        axios.get(dataLink)
            .then(res => {
                const articles = Array.isArray(res.data) ? res.data.map(obj => obj) : res.data;
                this.setState({
                    articles,
                    loading: false
                })
            })
    }

    componentWillMount() {
        this.setState({ loading: true });
        this.getData("/articles/"+window.location.hash.replace( "#", ""));
    };

    componentDidMount() {
        window.onhashchange = (e) => {
            this.setState({ loading: true });
            this.setState({ currentRoute: window.location.hash });
            this.getData("/articles/"+window.location.hash.replace( "#", ""));
        };
    };

    render() {
        return (
            this.state.loading ?
                <div className='sweet-loading'>
                    <CircleLoader
                        color={'#123abc'}
                        loading={this.state.loading}
                    />
                </div>
                :
                <div className="my-4">
                    <ArticlesElements items={this.state.articles} />
                    {this.state.articles.length > 5 ?
                        <ul className="pagination justify-content-center mb-4">
                            <li className="page-item">
                                <a className="page-link" href="#">&larr; Older</a>
                            </li>
                            <li class="page-item disabled">
                                <a className="page-link" href="#">Newer &rarr;</a>
                            </li>
                        </ul>
                        : ""
                    }
                </div>
        )
    }

}

const mapStateToProps = state => state;

export default connect(mapStateToProps)(ArticlesContainer);