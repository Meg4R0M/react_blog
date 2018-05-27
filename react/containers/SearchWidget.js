import React, { Component } from "react";

class SearchWidget extends Component {

    constructor(props) {
        super(props);

        SearchWidget.search = SearchWidget.search.bind(this);
    }

    static search(e) {
        e.preventDefault();

        const inputValue = document.getElementById("searchInput").value;
        document.getElementById("searchInput").value = '';
        window.location.hash = "search/"+inputValue;
    }

    render() {
        return (
            <div>
                <h5 className="card-header">SearchWidget</h5>
                <div className = "card-body" >
                    <div className="input-group">
                        <input type="text" className="form-control" placeholder="Search for..." id="searchInput"/>
                        <span className="input-group-btn">
                        <button className="btn btn-secondary" type="submit" onClick={SearchWidget.search}>Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        );
    }

}

export default SearchWidget;