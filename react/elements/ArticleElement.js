import React, { Component } from "react";
import Moment from "moment";

class ArticleElement extends Component {

    constructor(props) {
        super(props);
    }

    render(){
        return (
            <div className="card mb-4">
                <img className="card-img-top" src="http://placehold.it/750x300" alt="Card image cap" />
                <div className="card-body">
                    <h2 className="card-title">{this.props.item.titre}</h2>
                    <p className="card-text">{this.props.item.accroche}</p>
                    <a href="#" className="btn btn-primary">Read More &rarr;</a>
                </div>
                <div className="card-footer text-muted">
                    Posted on {Moment(this.props.item.publieLe).format("ll")} by&nbsp;
                    <a href="#">{this.props.item.auteur}</a>
                </div>
            </div>
        )
    }

};

export default ArticleElement;