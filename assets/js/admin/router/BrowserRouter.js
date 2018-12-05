import {Router, Route, Switch} from "react-router-dom";
import React from "react";
import createBrowserHistory from "history/createBrowserHistory";
import AdminFormComponent from "../components/AdminFormComponent";
import DashboardComponent from "../components/DashboardComponent";

const customHistory = createBrowserHistory();

class AdminAppRouter extends React.Component {
    render() {
        return (
            <Router history={customHistory}>
              <div>
                <Switch>
                  <Route path="/admin/articles" component={AdminFormComponent}/>
                  <Route path="/admin" component={DashboardComponent}/>
                </Switch>
              </div>
            </Router>
        );
    }
}
export default AdminAppRouter;