import React from 'react'
import ReactOnRails from 'react-on-rails'
import { Provider } from 'react-redux'
import AdminApp from "../AdminApp";

const mainNode = () => {

    const store = ReactOnRails.getStore('articlesAdminStore')

    return (
        <Provider store={store}>
            <AdminApp/>
        </Provider>
    )
}

export default mainNode
