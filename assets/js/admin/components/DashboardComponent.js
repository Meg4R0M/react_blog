import React from "react";
import connect from "react-redux/es/connect/connect";
import ArticleWidgetComponent from "./widgets/ArticleWidgetComponent";
import CategorieWidgetComponent from "./widgets/CategorieWidgetComponent";

const ConnectedArticleWidget = connect((state) => (
    {
      nbArticles: state.articlesState.nbArticles,
    }
))(ArticleWidgetComponent)

const ConnectedCategorieWidget = connect((state) => (
    {
      nbCategories: state.articlesState.nbCategories,
    }
))(CategorieWidgetComponent)

class DashboardComponent extends React.Component {
  constructor(props, context) {
    super(props, context)
  }

  render() {
      return (
          <div>
            <ConnectedArticleWidget/>
            <ConnectedCategorieWidget/>
          </div>
      )
  }

}

export default connect((state) => (
    {
      baseUrl: state.articlesState.baseUrl,
      authToken: state.articlesState.authToken,
    }
))(DashboardComponent)
