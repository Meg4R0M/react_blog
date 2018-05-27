import React, { Component } from "react";
import Moment from "moment/moment";

class ArticleElements extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            Array.isArray(this.props.items) ?
                <div>
                    { this.props.items.map(
                        item =>
                            <div key={item.id} className="card mb-4">
                                <img className="card-img-top" src={item.image.path} alt={item.image.alt} title={item.image.title}/>
                                <div className="card-body">
                                    <h2 className="card-title">{item.titre}</h2>
                                    <p className="card-text">{item.accroche}</p>
                                    <a href="#" className="btn btn-primary">Read More &rarr;</a>
                                </div>
                                <div className="card-footer text-muted">
                                    Posted on {Moment(item.publieLe).format("ll")} by&nbsp;
                                    <a href="#">{item.auteur}</a>&nbsp;
                                    in <a href="#">{item.categorie.nom}</a>
                                </div>
                            </div>
                    )}
                </div> :
                <div>
                    Woops !<br />
                    {this.props.items}
                </div>

        )
    }

}


export default ArticleElements;