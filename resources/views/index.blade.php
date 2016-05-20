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
                    <li><a class="addBtn" href="#!">Add</a></li>
                    <li><a class="searchBtn" href="#!">Search</a></li>
                    <li><a class="modal-trigger" href="#modalCo">Connexion</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a class="addBtn" href="#!">Add</a></li>
                    <li><a class="searchBtn" href="#!">Search</a></li>
                    <li><a class="modal-trigger" href="#modalCo" >Connexion</a></li>
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
                <form id="add" class="col s12" method="post" action="">
                    <div class="row">
                        <h4 class="light">Ajouter :</h4>
                        <div class="input-field col s12 m6">
                            <input id="titleBato" name="titleBato" type="text" class="validate">
                            <label for="titleBato">Titre</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <select name="tag">
                                <option value="1">#Rapport de stage</option>
                                <option value="2">#Rencontre</option>
                                <option value="3">#Work</option>
                            </select>
                            <label>tag</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="phraseBato" name="phraseBato" type="text" class="validate">
                            <label for="phraseBato">Phrase bato</label>
                        </div>
                   </div>
                   <div class="center">
                       <a class="waves-effect waves-light btn"><i class="material-icons left">add</i>Ajouter</a>
                   </div>
                </form>

                @for ($i = 1; $i <= 6; $i++)
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-content white-text">
                                <span class="card-title">Title {{ $i }} #TAG by User - date</span>
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>

        <div class="parallax-container valign-wrapper">
            <div class="container">
                <div class="row center">
                    <h3>Phrasesbato.fr</h3>
                </div>
            </div>
            <div class="parallax"><img src="../public/img/wallHomeR.jpg" alt="Phrasesbato background home"></div>
        </div>

        <div class="container">
            <div class="row">
                <form id="search" class="col s12" method="post" action="">
                    <div class="row">
                        <h4 class="light">Rechercher :</h4>
                        <div class="input-field col s12">
                            <select name="tag">
                                <option value="1">#Rapport de stage</option>
                                <option value="2">#Rencontre</option>
                                <option value="3">#Work</option>
                            </select>
                            <label>Par tag</label>
                        </div>
                   </div>
                   <div class="center">
                       <a class="waves-effect waves-light btn"><i class="material-icons left">search</i>Rechercher</a>
                   </div>
                </form>
            </div>
        </div>

        <!-- Modal Connexion -->
        <div id="modalCo" class="modal">
            <div class="modal-content">
                <h4 class="light">Connexion :</h4>
                <form id="connexion" class="col s12" method="post" action="">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="pseudo" name="pseudo" type="text" class="validate">
                            <label for="pseudo">Pseudo</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input id="mdp" name="mdp" type="password" class="validate">
                            <label for="mdp">Password</label>
                        </div>
                   </div>
                   <div class="center">
                       <a class="waves-effect waves-light btn"><i class="material-icons left">send</i>Connexion</a>
                   </div>
                </form>
            </div>
        </div>
        <!-- End Modal Connexion -->

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
                            <li><a class="addBtn grey-text text-lighten-3" href="#!">Add</a></li>
                            <li><a class="searchBtn grey-text text-lighten-3" href="#!">Search</a></li>
                            <li><a class="grey-text text-lighten-3 modal-trigger" href="#modalCo">Connexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright phrasesbato.fr made with Laravel and Materialize.
                    <a class="grey-text text-lighten-4 right" href="#!">Mentions légale</a>
                </div>
            </div>
        </footer>
    </body>
    <script src="../public/js/jquery-2.2.3.min.js"></script>
    <script src="../public/js/materialize.min.js"></script>
    <script src="../public/js/init.js"></script>
    <script src="../public/js/scrollTo.min.js"></script>
</html>
