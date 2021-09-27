import React from "react";
import facebook from "../../assets/img/footer/fb.png";
import twitter from "../../assets/img/footer/twitter.png";
import youtube from "../../assets/img/footer/youtube.png";

import {NavLink} from "react-router-dom";
import classes from "./Footer.module.css";

const footer = (props) => (
    <>
        <footer className="bg-primary">
            <div className="text-white text-center">MyZoo - Tout droits réservés</div>
            <div className="row no-gutters align-items-center text-center pt-2">
                <div className="col-3">
                    <a href="www...." className="d-block" target="_blank">
                        <img src={facebook} alt='facebook' className="imgFB"/>
                    </a>
                </div>
                <div className="col-3">
                    <a href="www...." className="d-block" target="_blank">
                        <img src={twitter} alt='facebook' className="imgTwitter"/>
                    </a>
                </div>
                <div className="col-3">
                    <a href="www...." className="d-block" target="_blank">
                        <img src={youtube} alt='facebook' className="imgYoutube"/>
                    </a>
                </div>
                <div className="col-3">
                   <NavLink to="/mentionLegales" className={["nav-link", "p-0", "m-0", classes.p_footerLink].join(" ")}>mentions légales</NavLink>
                    <a href="mailto:contact@myzoo.com" className={["nav-link", "p-0", "m-0", classes.p_footerLink].join(" ")}>contact@myzoo.com</a>
                </div>
            </div>
        </footer>
    </>
);

export default footer;