import React, { Component } from 'react';

export default class AboutUs extends Component {
    render () {
        return (
            <div className="app">
                <center><h1> WHO WE ARE</h1></center>
                <div className="flexbox-container">
                    <div className="flexbox-item flexbox-item-1">
                        <img id="displayPicture" src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/Stelle-Laguda.jpg" />
                        <div className="description">
                            <br />
                            <h2> Stelle Laguda </h2>
                            <hr />
                            <h5>
                                Stelle Laguda started her career doing international projects the moment she graduated cum laude from UP Film Institute in 2018. 
                            She aims to produce thought-provoking and brave films through shorts and feature lengths with various talented directors. 
                            Now, she is an alumna of NAFF Fantastic Film School (2019), Locarno Open Doors Lab (2021), EAVE Ties That Bind (2021)and Rotterdam Lab (2022) 
                            with her first feature project, RA 8491 or How We Recall Lost Memories in Transit.
                            </h5>
                        </div>
                    </div>

                    <div className="flexbox-item flexbox-item-2">
                        <img id="displayPicture" src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/Austin-Tan.jpg" />
                        <div className="description">
                            <br />
                            <h2> Austin Tan </h2>
                            <hr />
                            <h5>
                                Austin Tan is a filmmaker who hails from Tuguegarao City, Cagayan, Philippines. 
                            He makes short and experimental films that tackles political and social topics through concepts that deal on memory and death. 
                            He has received project development support from Internationale Kurzfilmtage Winterthur, Locarno Open Doors, 
                            SGIFF Southeast Film Lab, Full Circle Philippines and EAVE Ties That Bind.
                            </h5>
                        </div>
                    </div>

                    <div className="flexbox-item flexbox-item-3">
                        <img id="displayPicture" src="https://kt-house-productions.s3.ap-southeast-1.amazonaws.com/images/Gilb-Baldoza.jpg" />
                        <div className="description">
                            <br />
                            <h2> Gilb Baldoza </h2>
                            <hr />
                            <h5>
                                Gilb Baldoza is a Filipino queer filmmaker whose last short film, Girly is in Control of His Life, screened in over 20 film festivals, 
                            winning Best Film in Shanghai Queer Film Festival and Best Screenplay in Cinemalaya Independent Film Festival in 2019.
                            He graduated in Film at the University of the Philippines Film Institute (UPFI) in 2018 
                            and now works as a Director and Cinematographer under Swimming Pictures for feature films, short films, tv commercials and music videos. 
                            Gilb makes social realist short films and animations in his storytelling of queer films 
                            and is now working on his first feature film, Ms. Gay 2016 and the Dying World, with Stelle Laguda in its very early development
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}