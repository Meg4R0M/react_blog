import React, { Component } from "react";
import Categories from '../elements/CategoriesElement';
import axios from "axios/index";
import { CircleLoader } from 'react-spinners';

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
                        <CircleLoader
                            color={'#123abc'}
                            loading={this.state.loading}
                        />
                    </div>
                    :
                    <div>
                        <h5 className="card-header">Categories - <a href="#">All</a></h5>
                        <div className="card-body">
                            <Categories items={this.state.categories} />
                        </div>
                    </div>
                }
            </div>
        )
    }

}

export default CategoriesWidget;