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
            this.setState({ currentRoute: window.location.hash }),
                axios.get("/articles/"+window.location.hash.replace( "#", ""))
                    .then(res => {
                        const articles = Array.isArray(res.data) ? res.data.map(obj => obj) : res.data;
                        this.setState({
                            articles,
                            loading: false
                        });
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
    }

    render() {
        let data;
        if (this.state.loading) {
            data = null
        } else {
            data = <ArticlesElements items={this.state.articles} />
        }

        return (
            <div>
                {data}
            </div>
        )
    }

}

export default ArticlesContainer;