import React, { Component } from "react";
import Categories from '../elements/CategoriesElement';
import axios from "axios/index";
import { RingLoader } from 'react-spinners';

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
        return (
            <div>
                {this.state.loading ?
                    <div className='sweet-loading'>
                        <RingLoader
                            color={'#123abc'}
                            loading={this.state.loading}
                        />
                    </div>
                    :
                    <Categories items={this.state.categories} />}
            </div>
        )
    }

}

export default CategoriesWidget;