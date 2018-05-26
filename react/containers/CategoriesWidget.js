import React, { Component } from "react";
import Categories from '../elements/CategoriesElement';
import axios from "axios/index";

class CategoriesWidget extends Component {

    constructor(props) {
        super(props);

        this.state = {
            articles: [],
            loading: true,
        };
    }

    componentDidMount() {
        axios.get(`/categories`)
            .then(res => {
                const categories = res.data.map(obj => obj);
                this.setState({
                    categories,
                    loading: false
                });
            });
    }

    render() {
        let data;
        if (this.state.loading) {
            data = null
        } else {
            data = <Categories items={this.state.categories} />
        }

        return (
            <div>
                {data}
            </div>
        )
    }

}

export default CategoriesWidget;