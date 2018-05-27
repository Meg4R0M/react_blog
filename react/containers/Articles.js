import React, { Component } from "react";
import ArticlesElements from '../elements/ArticlesElement';
import axios from "axios/index";
import { CircleLoader } from 'react-spinners';

class ArticlesContainer extends Component {

    constructor(props) {
        super(props);

        this.state = {
            currentRoute: "",
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

    componentDidMount() {
        window.onhashchange = (e) => {
            this.setState({ loading: true });
            this.setState({ currentRoute: window.location.hash });
            this.getData("/articles/"+window.location.hash.replace( "#", ""));
        };

        this.getData("/articles");
    };

    render() {
        return (
            <div>
                {this.state.loading ?
                    <div className='sweet-loading'>
                        <CircleLoader
                            color={'#123abc'}
                            loading={this.state.loading}
                        />
                    </div>
                    :
                    <ArticlesElements items={this.state.articles} />}
            </div>
        )
    }

}

export default ArticlesContainer;