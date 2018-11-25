import { createStore } from 'redux';
import { devToolsEnhancer } from 'redux-devtools-extension';
import currentArticles from "../reducers/Articles"

const articlesStore = createStore(currentArticles, devToolsEnhancer(
    // Specify name here, actionsBlacklist, actionsCreators and other options if needed
));

export default articlesStore;