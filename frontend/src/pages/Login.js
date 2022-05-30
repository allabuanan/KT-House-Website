import React, { Component } from 'react';
import axios from 'axios';


export default class Login extends Component {
    handleSubmit = (e) => {
        e.preventDefault();
        const data = {
            name: this.name,
            email: this.email,
            password: this.password,
            confirmPassword: this.confirmPassword
        };

        console.log(data)

        axios.post('http://localhost:8000/api/register', data).then(
            res => {
                console.log(res);
            }
        ).catch(
            err => {
                console.log(err);
            }
        );
    }

    render () {
        return (
            <form className='form' onSubmit={this.handleSubmit}>
                <center><h2>Login</h2></center>
                <div className='form-group'>
                    <label>Email:</label>
                    <input type='text' className='form-control' placeholder='Email' onChange={e => this.emails = e.target.value}/>
                </div>
                <div className='form-group'>
                    <label>Password:</label>
                    <input type='password' className='form-control' placeholder='Password' onChange={e => this.password = e.target.value}/>
                </div>
                <button className='btn btn-primary btn-block'>Sign Up</button>
            </form>
        );
        
    }
}