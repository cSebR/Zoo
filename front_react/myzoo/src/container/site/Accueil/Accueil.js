import React, { Component } from 'react';
import TitreH1 from "../../../components/UI/Titres/TitreH1";
import banderole from "../../../assets/img/banderole.png";
import logo from "../../../assets/img/logo.png";

class Accueil extends Component {
    componentDidMount = () => {
        document.title = "Parc d'animaux MyZoo";
    }

    render() {
        return (
            <div>
                <img src={banderole} alt="banderole" className="img-fluid" />
                <TitreH1 bgColor="bg-success">Venez visiter le parc d'animaux MyZoo !!!</TitreH1>
                <div className="container">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, placeat! 
                        Accusantium quaerat consequuntur assumenda est accusamus vel delectus libero ipsam 
                        doloremque non maxime tempora aut, dolorum, dolore minus dolorem neque?
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, placeat! 
                        Accusantium quaerat consequuntur assumenda est accusamus vel delectus libero ipsam 
                        doloremque non maxime tempora aut, dolorum, dolore minus dolorem neque?
                    </p>
                    <div className="row no-gutters align-items-center">
                        <div className="col-12 col-md-6">
                            <img src={logo} alt='logo du site' className="img-fluid" />
                        </div>
                        <div className="col-12 col-md-6">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, placeat! 
                            Accusantium quaerat consequuntur assumenda est accusamus vel delectus libero ipsam 
                            doloremque non maxime tempora aut, dolorum, dolore minus dolorem neque?
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, placeat! 
                            Accusantium quaerat consequuntur assumenda est accusamus vel delectus libero ipsam 
                            doloremque non maxime tempora aut, dolorum, dolore minus dolorem neque?
                        </div>
                        <div className="col-12 col-md-6">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, placeat! 
                            Accusantium quaerat consequuntur assumenda est accusamus vel delectus libero ipsam 
                            doloremque non maxime tempora aut, dolorum, dolore minus dolorem neque?
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, placeat! 
                            Accusantium quaerat consequuntur assumenda est accusamus vel delectus libero ipsam 
                            doloremque non maxime tempora aut, dolorum, dolore minus dolorem neque?
                        </div>
                        <div className="col-12 col-md-6">
                            <img src={logo} alt='logo du site' className="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Accueil;