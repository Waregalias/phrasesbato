<!DOCTYPE html>
<html>
    <head>
        <title>PhrasesBato</title>
        <link href="../public/css/app.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    </head>
    <body>
        <nav>
            <div class=" container nav-wrapper">
                <a href="#" class="brand-logo">PhrasesBato.fr</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#!">Add</a></li>
                    <li><a href="#!">Search</a></li>
                    <li><a href="#!">Connexion</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="#!">Add</a></li>
                    <li><a href="#!">Search</a></li>
                    <li><a href="#!">Connexion</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h2 class="light center">Avec phrasesbato.fr, devenez 100% génériques.</h2>
            <p class="center">Trouvez des phrases bateau pour vos dossiers, entretien ou rencontre !</p>
        </div>

        <div class="parallax-container valign-wrapper">
            <div class="container">
                <div class="row center">
                    <h3>Phrase du jour :</h3>
                    <h5 class="header col s12">Vous recherchez un consultant, je ne le suis pas mais j'aimerais le devenir.</h5>
                </div>
            </div>
            <div class="parallax"><img src="../public/img/wallHome.jpg" alt="Phrasesbato background home"></div>
        </div>

        <div class="container">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <h4 class="light">Ajouter :</h4>
                        <div class="input-field col s12">
                            <input id="phrbato" name="phrbato" type="text" class="validate">
                            <label for="phrbato">votre phrase bateau :</label>
                        </div>
                   </div>
                   <div class="center">
                       <a class="waves-effect waves-light btn"><i class="material-icons left">send</i>Envoyer</a>
                   </div>
                </form>
                <?php
                    for ($i=0; $i < 6 ; $i++) {
                        echo'<div class="col s12 m6">
                                <div class="card">
                                    <div class="card-content white-text">
                                        <span class="card-title">Title by User - date</span>
                                        <p>I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                    </div>
                                </div>
                            </div>';
                    }
                 ?>
            </div>
        </div>

        <div class="parallax-container valign-wrapper">
            <div class="container">
                <div class="row center">
                    <h3>Phrase du Mois :</h3>
                    <h5 class="header col s12">Lorem ipsum dolor sit amet, consectetur adipiscing elit am eleifend.</h5>
                </div>
            </div>
            <div class="parallax"><img src="../public/img/wallHomeR.jpg" alt="Phrasesbato background home"></div>
        </div>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                    <h5 class="white-text">phrasesbato.fr</h5>
                    <p class="grey-text text-lighten-4">Trouvez des phrases bateau pour vos dossiers, entretien ou rencontre !</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Plan</h5>
                    <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Add</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Search</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Connexion</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright phrasesbato.fr made with Laravel and Materializecss.
                    <a class="grey-text text-lighten-4 right" href="#!">Mentions légale</a>
                </div>
            </div>
        </footer>
    </body>
    <script src="../public/js/jquery-2.2.3.min.js"></script>
    <script src="../public/js/materialize.min.js"></script>
    <script src="../public/js/init.js"></script>
</html>
