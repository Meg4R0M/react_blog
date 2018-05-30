import "babel-polyfill"

async function getArticle() {
    return await fetch("/articles").then(
        response => response.json(),
        error => console.log('An error occurred.', error)
    ).then( (body) => body);
}

const initialState = {
    articles: getArticle(),
    loading: true,
};

const currentArticles = (state = initialState, action, terms = null) => {
    switch (action.type) {
        case 'All':
            return {
                articles: fetch("/articles").then(
                    response => response.json(),
                    error => console.log('An error occurred.', error)
                ),
                loading: false
            };
        case 'Categorie':
            return {
                articles: fetch("/articles/"+terms).then(
                    response => response.json(),
                    error => console.log('An error occurred.', error)
                ),
                loading: false
            };
        case 'Search':
            return {
                articles: fetch("/articles/"+terms).then(
                    response => response.json(),
                    error => console.log('An error occurred.', error)
                ),
                loading: false
            };
        default:
            return state;
    }
};

export default currentArticles;