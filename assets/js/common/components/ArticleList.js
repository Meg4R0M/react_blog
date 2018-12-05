import React from 'react'
import Article from './Article'
import { Link } from 'react-router-dom'

const ArticleList = (props) => (
    <div>
        {props.articles.map((article, idx) => (
            <div key={idx}>
                <Link to={'/article/' + article.id}>
                    <Article key={idx} recipe={article} id={idx}/>
                </Link>
            </div>
        ))}
    </div>
)

export default ArticleList
