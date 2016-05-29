<!DOCTYPE html>
<html>
    <head>
        <title>PhrasesBato</title>
        <link href="../public/css/app.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    </head>
    <body>
      @yield('content')
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
  @yield('homescript')
</html>
