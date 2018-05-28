import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';

import EntryPoint from "./EntryPoint";
import SearchWidget from "./widgets/SearchWidget";
import CategoriesWidget from "./widgets/CategoriesWidget";

import pagesStore from "./store/Pages";

class App extends Component {

    render() {
        return (
            <Provider store={pagesStore}>
                <EntryPoint />
            </Provider>
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