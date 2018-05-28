import fetch from 'cross-fetch';

export function fetchPosts(subreddit) {

  return function (dispatch) {
​
    dispatch(requestPosts(subreddit))
​
    return fetch(`https://www.reddit.com/r/${subreddit}.json`)
      .then(
        response => response.json(),
        error => console.log('An error occurred.', error)
      )
      .then(json =>
        dispatch(receivePosts(subreddit, json))
      )
  }
}