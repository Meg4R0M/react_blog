import React, { Component } from 'react';
import {connect} from "react-redux";

import Navbar from "./containers/Navbar";

import Home from "./containers/Home";
import AboutUs from "./containers/AboutUs";
import ArticlesContainer from "./containers/Articles";

const pageToShow = (page) => {
    switch(page){
        case 'Home':
            return <Home />;
        case 'Articles':
            return <ArticlesContainer />;
        case 'About':
            return <AboutUs />;
        default:
            return <Home />;
    }
}

class Entrypoint extends Component {

    render() {
        return (
            <div>
                <Navbar />
                {pageToShow(this.props.page)}
            </div>
        )
    }

}

const mapStateToProps = state => state;

export default connect(mapStateToProps)(Entrypoint);