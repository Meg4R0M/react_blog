import React, { Component } from "react";
import axios from 'axios';

class AboutUsContainer extends Component {

    constructor(props) {
        super(props);

        this.state = {
            posts: []
        };
    }

    componentDidMount() {
        axios.get(`https://www.reddit.com/r/unixporn.json`)
            .then(res => {
                const posts = res.data.data.children.map(obj => obj.data);
                this.setState({ posts });
            });
    }

    render() {
        return (
            <div>
                <ul className="list-unstyled mb-0">
                    {this.state.posts.map(post =>
                        <li key={post.id}><a href={post.url}>{post.title}</a></li>
                    )}
                </ul>
            </div>
        );
    }

}

export default AboutUsContainer;