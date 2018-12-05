import React from 'react'
import Article from '../../common/components/Article'

const ArticleListComponent = (props) => (
    <div>
        {props.articles.map((article, idx) => (
            <div key={idx}>
                <Article key={idx} article={article} id={idx}/>
            </div>
        ))}
    </div>
)

export default ArticleListComponent
