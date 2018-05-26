import React, { Component } from "react";
import HomeElements from './HomeElements';
import axios from "axios/index";

class HomeContainer extends Component {

    constructor(props) {
        super(props);

        this.state = {
            articles: []
        };
    }

    componentDidMount() {
        axios.get(`/articles`)
            .then(res => {
                const articles = res.data.map(obj => obj);
                this.setState({ articles });
            });
    }

    render() {

        return (
            <div>
                <p>Bonjour je suis Home !</p>
                <HomeElements items={this.state.articles} />
            </div>
        )
    }

}

export default HomeContainer;