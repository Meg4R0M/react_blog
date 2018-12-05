import React from 'react'
import { connect } from 'react-redux'
import { login } from '../actions/IndexAction'

class LoginComponent extends React.Component {
    constructor(props, context) {
        super(props, context)
        this.state = {
            username: '',
            password: '',
        }
        this.setUsername = this.setUsername.bind(this)
        this.setPassword = this.setPassword.bind(this)
        this.submit = this.submit.bind(this)

    }

    submit(e) {
        e.preventDefault()
        this.props.dispatch(login(this.state.username, this.state.password, this.props.baseUrl))
    }

    setUsername(e) {
        this.setState({ username: e.target.value })
    }

    setPassword(e) {
        this.setState({ password: e.target.value })
    }

    render() {
        const { loginError } = this.props
        return (
            <div className="container containerAdminLogin">
              <div className="login-form">
                <div className="main-div">
                  <div className="panel">
                    <h2>Admin Login</h2>
                    <p>Please enter your email and password</p>
                  </div>
                  <form onSubmit={this.submit} id="login">
                    { loginError &&
                    <div className="alert alert-danger" role="alert">Invalid username or password</div>
                    }
                    <div className="form-group">
                      <input value={this.state.username} onChange={this.setUsername} type="email" className="form-control" id="inputemail" placeholder="Email address"/>
                    </div>
                    <div className="form-group">
                      <input value={this.state.password} onChange={this.setPassword} type="password" className="form-control" id="inputPassword" placeholder="Password"/>
                    </div>
                    <button type="submit" className="btn btn-primary" >Login</button>
                  </form>
                </div>
              </div>
            </div>
        )
    }
}


export default connect(state => (
    {
        baseUrl : state.articlesState.baseUrl,
        loginError : state.articlesState.loginError,
    }
))(LoginComponent)
