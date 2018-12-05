import React from 'react'
import ArticleList from './ArticleList'

export default class ArticleSearchList extends React.Component {

    constructor(props, context) {
        super(props, context)
        this.state = {
            filterText: ''
        }
    }

    onChangeSearch(evt) {
        this.setState({ filterText: evt.target.value })
    }

    filterArticles() {
        return this.props.articles.filter((article)  => {
            if (this.state.filterText != '' && article.name.toLowerCase().indexOf(this.state.filterText) === -1) {
                return false
            }
            return true
        })
    }

    render() {
        return (
            <div className="container">
                <div id="search-box" className="pull-right">
                    <div className="input-group">
                        <input type="text" className="form-control" value={this.state.filterText} placeholder="Search for..." onChange={this.onChangeSearch.bind(this)}/>
                    </div>
                </div>
                <h2>List of articles</h2>
                <ArticleList articles={this.filterArticles()} routePrefix={this.props.routePrefix}/>
            </div>
        )
    }
}
