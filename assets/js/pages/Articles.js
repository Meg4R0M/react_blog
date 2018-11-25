import React, { Component } from "react";
import { Provider } from 'react-redux';

import articlesStore from "../store/Articles";
import ArticlesContainer from "../containers/Articles";

class Articles extends Component {

  render() {
    return (
        <Provider store={articlesStore}>
          <ArticlesContainer/>
        </Provider>
    )
  }

}

export default Articles;