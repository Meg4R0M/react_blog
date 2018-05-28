import React, { Component } from "react";
import {connect} from "react-redux";
import HomeElement from "../elements/HomeElement";
import axios from "axios/index";

class HomeElements extends Component {

    render() {
        console.log(this.props.inspect);
        while (!this.props.articles) {}
        console.log("DONE: " + this.props.articles.value);
        return (
            <p>test</p>
        )
    }

}

const mapStateToProps = state => state;
export default connect(mapStateToProps)(HomeElements);