import React, { Component } from 'react';

export default class Home extends Component {
    render () {
        return (
            <div className='home'>
                <center><h1> WHAT WE DO </h1></center>

                <div id="carousel-container">
                    <div id="carouselExampleIndicators" className="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div className="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" className="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        </div>
                        <div className="carousel-inner">
                        <div className="carousel-item active">
                            <img src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/visionPage/img1.JPG" className="d-block w-100" alt="..." />
                        </div>
                        <div className="carousel-item">
                            <img src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/visionPage/img2.JPG" className="d-block w-100" alt="..." />
                        </div>
                        <div className="carousel-item">
                            <img src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/visionPage/img3.JPG" className="d-block w-100" alt="..." />
                        </div>
                        <div className="carousel-item">
                            <img src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/visionPage/img4.JPG" className="d-block w-100" alt="..." />
                        </div>
                        <div className="carousel-item">
                            <img src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/visionPage/img5.JPG" className="d-block w-100" alt="..." />
                        </div>
                        <div className="carousel-item">
                            <img src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/visionPage/img6.JPG" className="d-block w-100" alt="..." />
                        </div>
                        <div className="carousel-item">
                            <img src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/visionPage/img7.JPG" className="d-block w-100" alt="..." />
                        </div>
                        </div>
                        <button className="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span className="visually-hidden">Previous</span>
                        </button>
                        <button className="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span className="carousel-control-next-icon" aria-hidden="true"></span>
                        <span className="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>


                <center>
                    <br /><h4> KT House Productions is Manila-based Philippine production company, established by three Filipino women producers in 2021. 

                        We are a home to stories that empower narratives embedded in the sociocultural climate of each region, with careful consideration to the nuances and cultural implications of each project
                        
                        We offer line production, creative production and co-productions of features, shorts, series and branded content.
                    </h4>
                </center>
            </div>
        );
    }
}