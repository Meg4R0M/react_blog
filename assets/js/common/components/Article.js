import React from 'react'

const Article = (props) => (
    <div>
        <h3>{props.article.titre}</h3>
        <div className="thumbnail">
            <div className="row">
                <div className="col-md-3">
                    <img src={props.article.image.path} className="img-responsive"/>
                </div>
                <div className="col-md-9">
                    <p className="recipe-body">
                        { props.article.accroche }
                    </p>
                    <p className="recipe-body">
                        { props.article.post }
                    </p>
                </div>
            </div>
        </div>
    </div>
)

export default Article
