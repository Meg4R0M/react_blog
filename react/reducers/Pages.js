const initialState = {
    page: "Home",
};

const currentPage = (state = initialState, action) => {
    switch (action.type) {
        case 'Home':
            return {
                page: "Home"
            };
        case 'Articles':
            return {
                page: "Articles"
            };
        case 'About':
            return {
                page: "About"
            };
        case 'Contact':
            return {
                page: "Contact"
            };
        default:
            return state;
    }
};

export default currentPage;