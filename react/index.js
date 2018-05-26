import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link } from 'react-router-dom'

import Home from "./containers/Home";
import AboutUs from "./containers/AboutUs";
import ArticlesContainer from "./containers/Articles";

class App extends Component {

    render() {
        return (
            <Router>
                <div>
                    <Route exact path="/" component={Home}/>
                    <Route path="/about-us" component={AboutUs}/>
                </div>
            </Router>
        )
    }

}

class Articles extends Component {

    render() {
        return (
            <ArticlesContainer />
        )
    }

}

const wrapper = document.getElementById("root");
wrapper ? ReactDOM.render(<App />, wrapper) : false;

const articlesWrapper = document.getElementById("articles");
wrapper ? ReactDOM.render(<Articles />, articlesWrapper) : false;