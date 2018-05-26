import React, { Component } from "react";

class CategoriesElement extends Component {

    constructor(props) {
        super(props);
    }


    render(){
        let BreakPoint = this.props.items.length / 2;
        return (
            <div className="row">
                {this.props.items.map(
                    (item, i) =>
                        (i < BreakPoint) ? (
                            <div key={item.id} className="col-lg-6">
                                <ul className="list-unstyled mb-0">
                                    <li><a href="">{item.nom}</a></li>
                                </ul>
                            </div>
                        ) : (
                            <div key={item.id} className="col-lg-6">
                                <ul className="list-unstyled mb-0">
                                    <li><a href="">{item.nom}</a></li>
                                </ul>
                            </div>
                        )
                )}
            </div>
        )
    }

};

export default CategoriesElement;