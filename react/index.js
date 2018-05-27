import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link } from 'react-router-dom'

import Home from "./containers/Home";
import AboutUs from "./containers/AboutUs";
import ArticlesContainer from "./containers/Articles";
import SearchWidget from "./containers/SearchWidget";
import CategoriesWidget from "./containers/CategoriesWidget";

class App extends Component {

    render() {
        return (
            <Router>
                <div>
                    <Route path="/" component={ArticlesContainer}/>
                    <Route path="/about-us" component={AboutUs}/>
                </div>
            </Router>
        )
    }

}

class Search extends Component {

    render() {
        return (
            <SearchWidget />
        )
    }

}

class Categories extends Component {

    render() {
        return (
            <CategoriesWidget />
        )
    }

}

const appRootWrapper = document.getElementById("appRoot");
appRootWrapper ? ReactDOM.render(<App />, appRootWrapper) : false;

const searchWrapper = document.getElementById("search");
searchWrapper ? ReactDOM.render(<Search />, searchWrapper) : false;

const categoriesWrapper = document.getElementById("categories");
categoriesWrapper ? ReactDOM.render(<Categories />, categoriesWrapper) : false;