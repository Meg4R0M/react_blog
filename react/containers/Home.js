import React, { Component } from "react";
import { Provider } from 'react-redux';
import HomeElements from './HomeElements';

import articlesStore from "../store/Articles";

class HomeContainer extends Component {

    render() {
        return (
            <Provider store={articlesStore}>
                <HomeElements />
            </Provider>
        )
    }

}

export default HomeContainer;