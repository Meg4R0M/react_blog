import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';

class Navbar extends Component {
  render(){
    return (
        <nav className="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div className="container">
            <a className="navbar-brand" href="#">Simple React Blog</a>
            <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span className="navbar-toggler-icon"/>
            </button>
            <div className="collapse navbar-collapse" id="navbarResponsive">
              <ul className="navbar-nav ml-auto">
                <li className="nav-item">
                  <NavLink className="nav-link" to="/" activeClassName="active">Home</NavLink>
                </li>
                <li className="nav-item">
                  <NavLink className="nav-link" to="/articles" activeClassName="active">Articles</NavLink>
                </li>
                <li className="nav-item">
                  <NavLink className="nav-link" to="/aboutus" activeClassName="active">About</NavLink>
                </li>
                <li className="nav-item">
                  <NavLink className="nav-link" to="/contact" activeClassName="active">Contact</NavLink>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    )
  }
}

export default Navbar;