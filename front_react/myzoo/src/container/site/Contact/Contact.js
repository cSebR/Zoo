import React, { Component } from 'react';
import Titre from "../../../components/UI/Titres/TitreH1";
import Formulaire from "./Formulaire/Formulaire";
import axios from "axios";

class Contact extends Component {
    componentDidMount = () => {
        document.title = "Page de contact";
    }

    handleEnvoiMail = (message) => {
        axios.post("http://localhost/animaux_serve/front/sendMessage",message)
            .then(reponse=> {
                console.log(reponse)
            })
            .catch(error => {
                console.log(error)
            })
    }

    render() {
        return (
            <>
                <Titre bgColor="bg-success">Contactez nous !</Titre>
                <div className="container">
                    <h2>Adresse :</h2>
                    xxxxxxxxxxxxxxxxxxxxxxxx
                    <h2>Téléphone</h2>
                    00 00 00 00 00
                    <h2>Vous préfèrez nous écrire ? </h2>
                    <Formulaire sendMail = {this.handleEnvoiMail}/>
                </div>
            </>
        );
    }
}

export default Contact;