import React from 'react';
import {BrowserRouter as Router, Route, Routes, Link} from 'react-router-dom';
import axios from 'axios';

import Home from './pages/Home';
import AboutUs from './pages/AboutUs';
import Works from './pages/Works';
import Register from './pages/Register';
import Login from './pages/Login';
import './App.css';

import './styles.css';
import '../node_modules/bootstrap/dist/css/bootstrap.min.css'

function App() {
  return (
    <Router>
      <div className='app'>
            <nav className="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div className="container">
                    <a className="navbar-brand" href="">
                        <img id="logo" src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/KT-Logo-Transparent.png" height="20%" width="20%" />
                    </a> 
                    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                    </button>
        
                    <div className="collapse navbar-collapse">

                        <ul className="navbar-nav mr-auto"></ul>
                            

                        <ul className="navbar-nav me-auto">
                                <li><Link to="/" className="nav-link text-nowrap"> What We Do </Link></li>
                                <li><Link to="/aboutUs" className="nav-link text-nowrap"> Who We Are </Link></li>
                                <li><Link to="/works" className="nav-link text-nowrap"> Works </Link></li>
                                <li><Link to="/login" className="nav-link text-nowrap"> Login </Link></li>
                                <li><Link to="/register" className="nav-link text-nowrap"> Register </Link></li>

                                {/* <li><a className="nav-link text-nowrap" href=""> What We Do </a></li>
                                <li><a className="nav-link text-nowrap" href=""> Who We Are </a></li>
                                <li><a className="nav-link text-nowrap" href=""> Works </a></li>
                                <li><a className="nav-link text-nowrap" href="#"> Contact Us </a></li> */}
                                <li className="nav-item dropdown">
                                    <a id="navbarDropdown" className="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Name
                                    </a>

                                    <div className="dropdown-menu" aria-labelledby="navbarDropdown">
                                        {/* <a class="dropdown-item" href="{{ route('users.index') }}">Manage Users</a>
                                        <a class="dropdown-item" href="{{ route('roles.index') }}">Manage Roles</a>
                                        <a class="dropdown-item" href="{{ route('films.index') }}">Manage Films</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a> */}


                                        {/* <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form> */}
                                    </div>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div className="container">
      <Routes>
        <Route path='/' element={<Home />}></Route>
        <Route path='/aboutUs' element={<AboutUs />}></Route>
        <Route path='/works' element={<Works />}></Route>
        <Route path='/register' element={<Register />}></Route>
        <Route path='/login' element={<Login />}></Route>
      </Routes>
        </div>
    </Router>
  );
}

export default App;
 