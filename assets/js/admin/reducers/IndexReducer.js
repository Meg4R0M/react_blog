import articlesReducer from './ArticlesReducer'
import { initialState as articlesState } from './ArticlesReducer'
import { combineReducers }  from 'redux'
import { reducer as formReducer } from 'redux-form'

// Combine all reducers you may have here
export default combineReducers({
    articlesState: articlesReducer,
    form: formReducer
})

export const initialStates = {
    articlesState,
}
