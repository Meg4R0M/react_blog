import React, { Component } from "react";
import {connect} from "react-redux";
import ArticlesElements from "../elements/ArticlesElement";
import axios from "axios/index";

class HomeElements extends Component {



    render() {
        console.log(this.props.articles);

        return (
            <div>
                COUIN
            </div>
        )
    }

}

const mapStateToProps = state => state;
export default connect(mapStateToProps)(HomeElements);