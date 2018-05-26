import React, { Component } from "react";
import ArticleElement from "../elements/ArticleElement";

class ArticleElements extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div>
                { this.props.items.map(item => <ArticleElement key={item.id} item={item} />)}
            </div>

        )
    }

}


export default ArticleElements;