import React from 'react'
import { connect } from 'react-redux'
import LoginComponent from './components/LoginComponent'
import AdminAppRouter from "./router/BrowserRouter";

const AdminApp = ({ authToken }) => {
    if (!authToken) {
        return <LoginComponent/>
    } else {
        return <AdminAppRouter/>
    }
}

export default connect((state) => (
    {
        authToken: state.articlesState.authToken,
    }
))(AdminApp)
