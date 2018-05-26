import React, { Component } from "react";
import ArticlesElements from './ArticlesElements';
import axios from "axios/index";

class ArticlesContainer extends Component {

    constructor(props) {
        super(props);

        this.state = {
            articles: [],
            loading: true,
        };
    }

    componentDidMount() {
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