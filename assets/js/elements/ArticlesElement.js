import React, { Component } from "react";
import Moment from "moment/moment";

class ArticleElements extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        if (Array.isArray(this.props.items)){
            return (
                <div>
                    { this.props.items.map(
                        item =>
                            <div key={item.id} className="card mb-4">
                                <img className="card-img-top" src={item.image.path} alt={item.image.alt} title={item.image.title}/>
                                <div className="card-body">
                                    <h2 className="card-title">{item.titre}</h2>
                                    <p className="card-text">{item.accroche}</p>
                                    <a href={"/#full/"+item.id} className="btn btn-primary">Read More &rarr;</a>
                                </div>
                                <div className="card-footer text-muted">
                                    Posted on {Moment(item.publieLe).format("ll")} by&nbsp;
                                    <a href="#">{item.auteur}</a>&nbsp;
                                    in <a href="#">{item.categorie.nom}</a>
                                </div>
                            </div>
                    )}
                </div>
            )
        }else if (typeof this.props.items === "object") {
            return (
                <div key={this.props.items.id} className="card mb-4">
                    <img className="card-img-top" src={this.props.items.image.path} alt={this.props.items.image.alt} title={this.props.items.image.title}/>
                    <div className="card-body">
                        <h2 className="card-title">{this.props.items.titre}</h2>
                        <p className="card-text">{this.props.items.post}</p>
                    </div>
                    <div className="card-footer text-muted">
                        Posted on {Moment(this.props.items.publieLe).format("ll")} by&nbsp;
                        <a href="#">{this.props.items.auteur}</a>&nbsp;
                        in <a href="#">{this.props.items.categorie.nom}</a>
                    </div>
                </div>
            )
        }else{
            return (
                <div>
                    Woops !<br/>
                    {this.props.items}
                </div>
            )
        }
    }

}

export default ArticleElements;