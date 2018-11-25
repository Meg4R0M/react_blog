import Articles from "../pages/Articles";
import Home from "../pages/Home";
import {Router, Route, Switch} from "react-router-dom";
import React from "react";
import AboutUs from "../pages/AboutUs";
import createBrowserHistory from "history/createBrowserHistory";
import Navbar from "../containers/Navbar";

const customHistory = createBrowserHistory();

class AppRouter extends React.Component {
    render() {
        return (
            <Router history={customHistory}>
              <div>
                <Navbar />
                <Switch>
                  <Route path="/articles" component={Articles}/>
                  <Route path="/aboutus" component={AboutUs}/>
                  <Route path="/" component={Home}/>
                </Switch>
              </div>
            </Router>
        );
    }
}
export default AppRouter;