import React, { Component } from 'react';
import axios from 'axios';

// axios.get('http:localhost:8000/sanctum/csrf-cookie', {withCredentials: true});
// window.axios = require('axios');
// window.axios.defaults.headers.common = {
//   'X-Requested-With': 'XMLHttpRequest',
//   'X-CSRF-TOKEN': window.csrf_token
// };

export default class Register extends Component {
    
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
                <center><h2>Sign Up</h2></center>
                <div className='form-group'>
                    <label>Name:</label>
                    <input type='text' className='form-control' placeholder='Name' onChange={e => this.name = e.target.value}/>
                </div>
                <div className='form-group'>
                    <label>Email:</label>
                    <input type='text' className='form-control' placeholder='Email' onChange={e => this.email = e.target.value}/>
                </div>
                <div className='form-group'>
                    <label>Password:</label>
                    <input type='password' className='form-control' placeholder='Password' onChange={e => this.password = e.target.value}/>
                </div>
                <div className='form-group'>
                    <label>Confirm Password:</label>
                    <input type='password' className='form-control' placeholder='Password' onChange={e => this.confirmPassword = e.target.value}/>
                </div>

                <button className='btn btn-primary btn-block'>Sign Up</button>
            </form>
        );
        
    }
}