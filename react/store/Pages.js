import { createStore } from 'redux';
import currentPage from "../reducers/Pages"

const pagesStore = createStore(currentPage);

export default pagesStore;