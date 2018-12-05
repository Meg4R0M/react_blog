import React from 'react'
import { connect } from 'react-redux'
import Liform, { processSubmitErrors } from 'liform-react'
import ArticleListComponent from '../components/ArticleListComponent'
import Constants from '../constants/ArticlesConstants'
import { fetchForm, fetchArticles } from '../actions/IndexAction'

const submit = (baseUrl, token, values, dispatch) =>
{
    return fetch(baseUrl + '/admin/api/articles', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': 'Bearer '+token,
        },
        body: JSON.stringify( values )
    }).then( (response) => {
        return response.json()
    }).then( (data) => {
        processSubmitErrors(data)
        dispatch({ type: Constants.ARTICLE_ADDED, article: data })
    })
}

const ConnectedArticleList = connect((state) => (
    {
        articles: state.articlesState.articles,
    }
))(ArticleListComponent)

class AdminFormComponent extends React.Component {
    constructor(props, context) {
        super(props, context)
    }

    componentDidMount() {
        const { schema, initialValues, baseUrl, dispatch, authToken } = this.props
        if (!schema || !initialValues) {
            dispatch(fetchForm(baseUrl, authToken))
            dispatch(fetchArticles(baseUrl, authToken))
        }
    }

    render() {
        const { schema, initialValues, baseUrl, authToken } = this.props
        if (schema) {
            return (
                <div>
                    <Liform schema={schema} onSubmit={submit.bind(this, baseUrl, authToken)} initialValues={initialValues}/>
                    <ConnectedArticleList/>
                </div>
            )
        } else {
            return <div>loading...</div>
        }
    }
}

export default connect((state) => (
    {
        schema: state.articlesState.schema,
        initialValues: state.articlesState.initialValues,
        baseUrl: state.articlesState.baseUrl,
        authToken: state.articlesState.authToken,
    }
))(AdminFormComponent)
