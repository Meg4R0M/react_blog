import React, { Component } from "react";
import Moment from "moment/moment";

class ArticleElements extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div>
                { this.props.items.map(
                    item =>
                        <div key={item.id} className="card mb-4">
                            <img className="card-img-top" src="http://placehold.it/750x300" alt="Card image cap" />
                            <div className="card-body">
                                <h2 className="card-title">{item.titre}</h2>
                                <p className="card-text">{item.accroche}</p>
                                <a href="#" className="btn btn-primary">Read More &rarr;</a>
                            </div>
                            <div className="card-footer text-muted">
                                Posted on {Moment(item.publieLe).format("ll")} by&nbsp;
                                <a href="#">{item.auteur}</a>
                            </div>
                        </div>
                )}
            </div>

        )
    }

}


export default ArticleElements;