import React, { Component } from "react";
import ArticlesElements from '../elements/ArticlesElement';
import axios from "axios/index";

class ArticlesContainer extends Component {

    constructor(props) {
        super(props);

        this.state = {
            currentRoute: "",
            articles: [],
            loading: true,
        };
    }

    componentDidMount() {
        window.onhashchange = (e) => {
            this.setState({ loading: true });
            this.setState({ currentRoute: window.location.hash });
            this.state.currentRoute.includes("search") ?
                axios.get("/articles/"+window.location.hash.replace( "#", ""))
                    .then(res => {
                        const articles = Array.isArray(res.data) ? res.data.map(obj => obj) : res.data;
                        this.setState({
                            articles,
                            loading: false
                        })
                    })
                :
                axios.get("/articles/"+window.location.hash.replace( "#", ""))
                    .then(res => {
                        const articles = Array.isArray(res.data) ? res.data.map(obj => obj) : res.data;
                        this.setState({
                            articles,
                            loading: false
                        })
                    });
        };

        axios.get(`/articles`)
            .then(res => {
                const articles = res.data.map(obj => obj);
                this.setState({
                    articles,
                    loading: false
                });
            });
    };

    render() {
        return (
            <div>
                {this.state.loading ? null : <ArticlesElements items={this.state.articles} />}
            </div>
        )
    }

}

export default ArticlesContainer;