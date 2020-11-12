import React, { Component } from 'react';
import { instanceOf } from "prop-types";
import { withCookies, Cookies } from "react-cookie";
import { Redirect } from 'react-router-dom';

class Login extends Component {
    constructor(props) {
        super(props);
        this.state = {
            user: this.props.cookies.get("user") || "",
            name: "",
            pass: ""
        };
        this.onChangeName = this.onChangeName.bind(this);
        this.onChangePass = this.onChangePass.bind(this);
        this.onSubmit = this.onSubmit.bind(this);
    }

    static propTypes = {
        cookies: instanceOf(Cookies).isRequired
    };

    onChangeName(e) {
        this.setState({ name: e.target.value })
    }

    onChangePass(e) {
        this.setState({ pass: e.target.value })
    }

    onSubmit(e) {
        e.preventDefault();

        const { cookies } = this.props;
        cookies.set("user", this.state.name, { path: "/" }); // setting the cookie
        this.setState({ user: cookies.get("user") });
    }
      
    render() {
        if (this.state.user === "") {
            return (
                <form className="panel">
                    <h1>Login to ZenSpace</h1>
                    <label>Name</label>
                    <input type="name" value={this.state.name} onChange={this.onChangeName} />
                    <button onClick={this.onSubmit}>Login</button>
                </form>
            );
        }
        else {
            window.location.reload();
            return(
                <div>Logging in!</div>
            );
        }
    }
}
export default withCookies(Login);