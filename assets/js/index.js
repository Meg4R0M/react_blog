import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import SearchWidget from "./widgets/SearchWidget";
import CategoriesWidget from "./widgets/CategoriesWidget";
import * as serviceWorker from './serviceWorker';

class Search extends React.Component {
  render() {
    return (
        <SearchWidget />
    )
  }

}

class Categories extends React.Component {
  render() {
    return (
        <CategoriesWidget />
    )
  }

}

const searchWrapper = document.getElementById("search");
searchWrapper ? ReactDOM.render(<Search />, searchWrapper) : false;

const categoriesWrapper = document.getElementById("categories");
categoriesWrapper ? ReactDOM.render(<Categories />, categoriesWrapper) : false;

const rootWrapper = document.getElementById("root");
categoriesWrapper ? ReactDOM.render(<App />, rootWrapper) : false;

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: http://bit.ly/CRA-PWA
serviceWorker.unregister();
