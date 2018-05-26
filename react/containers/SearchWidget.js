import React, { Component } from "react";

class SearchWidget extends Component {

    constructor(props) {
        super(props);

        SearchWidget.search = SearchWidget.search.bind(this);
    }

    static search(e) {
        e.preventDefault();

        const inputValue = document.getElementById("searchInput").value;

        window.location.hash = "search/"+inputValue;
    }

    render() {
        return (
            <div className="input-group">
                    <input type="text" className="form-control" placeholder="Search for..." id="searchInput"/>
                    <span className="input-group-btn">
                        <button className="btn btn-secondary" type="submit"  onClick={SearchWidget.search}>Go!</button>
                    </span>
            </div>
        );
    }

}

export default SearchWidget;