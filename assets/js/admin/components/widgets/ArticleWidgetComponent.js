import React from 'react'

const ArticleWidgetComponent = (props) => (
    <div>
      Nombre d'articles: {props.nbArticles}
      <a href="/admin/articles">Gestion des articles</a>
    </div>
)

export default ArticleWidgetComponent