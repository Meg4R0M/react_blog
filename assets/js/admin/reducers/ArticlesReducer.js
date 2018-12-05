import Constants from '../constants/ArticlesConstants'

export const initialState = {
    articles: [],
    authToken: null,
    initialValues: null,
    schema: null,
    loginError: null,
}

export default function tasksReducer(state = initialState, action) {
    switch (action.type) {
    case Constants.ARTICLE_ADDED:
        return { ...state, articles: [ action.article, ...state.articles ] }
    case Constants.LOGIN_TOKEN_RECEIVED:
        return { ...state, authToken: action.token, loginError: false }
    case Constants.LOGIN_ERROR:
        return { ...state, loginError: true }
    case Constants.FORM_FETCHED:
        return { ...state, initialValues: action.initialValues, schema: action.schema }
    case Constants.ARTICLES_FETCHED:
        return { ...state, articles: action.articles }
    default:
        return state
    }
}
