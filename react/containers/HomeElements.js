import React, { Component } from "react";
import HomeElement from "../elements/HomeElement";

class HomeElements extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div>
                { this.props.items.map(item => <HomeElement key={item.id} item={item} />)}
            </div>

        )
    }

}


export default HomeElements;