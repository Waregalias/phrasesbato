@extends('layout')
@section('content')
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
            <h2 class="light center">Avec phrasesbato, devenez 100% génériques.</h2>
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
                <form id="add" class="col s12" method="post" action="{{ URL::to('post') }}">
                    <div class="row">
                        <h4 class="light">Envoyer une phrase</h4>
                        <div class="input-field col s12 m6">
                            <i class="material-icons prefix">subject</i>
                            <select name="tag">
                                <option value="#Rapport">#Rapport de stage</option>
                                <option value="#Entretien">#Entretien Pro</option>
                                <option value="#LM">#Lettre de Motivation</option>
                            </select>
                            <label>tag</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="phraseBato" name="phraseBato" type="text" class="materialize-textarea"></textarea>
                            <label for="phraseBato">Texte</label>
                        </div>
                   </div>
                   <div class="center">
                         <button type="submit" class="waves-effect waves-light btn">
                         <i class="material-icons left">send</i>Envoyer
                       </button>
                   </div>
                   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                </form>
                <ul>
                  @if (empty($posts))
                      Aucun post n'est disponible... Veuillez réessayer ultérieurement.
                  @else
                    @foreach ($posts as $array)
                      <div class="col s12 m6">
                          <div class="card">
                              <div class="card-content white-text">
                                  <span class="card-title">{{ $array->tag }} par NULL - {{ date("F d, Y", strtotime($array->date_ajout)) }}</span>
                                  <p>{{ $array->texte }}</p>
                              </div>
                          </div>
                      </div>
                    @endforeach
                    {!! $posts->links() !!}
                  @endif
                </ul>
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
                                <option value="#Rapport">#Rapport de stage</option>
                                <option value="#Entretien">#Entretien Pro</option>
                                <option value="#LM">#Lettre de Motivation</option>
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
@stop
@section('homescript')
<script src="../public/js/jquery-2.2.3.min.js"></script>
  <script src="../public/js/materialize.min.js"></script>
  <script src="../public/js/init.js"></script>
  <script src="../public/js/scrollTo.min.js"></script>
@stop
