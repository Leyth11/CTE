<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Création d'une Séance - CTE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <style>
            body {
                padding-top: 40px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../../css/main.css">

        <script src="../../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
                        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
                        <li><button type="button" class="close" aria-hidden="true">&times;</button></li>
        <![endif]-->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand logo">C.T.E.</span>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="#listing"><span class="glyphicon glyphicon-book glyphicon-lg"></span>&nbsp;Séances</a></li>
                    <li class="active"><a href="#nouvelle"><span class="glyphicon glyphicon-file glyphicon-lg"></span>&nbsp;Nouvelle Séance</a></li>
                    <li><a href="#controles"><span class="glyphicon glyphicon-inbox glyphicon-lg"></span>&nbsp;Contrôles <span class="badge">3</span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user glyphicon-lg"></span>&nbsp;[CompteUtilisateur] <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#compte"><span class="glyphicon glyphicon-cog"></span>&nbsp;Options du Profil</a></li>
                            <li><a href="#logout"><span class="glyphicon glyphicon-remove red"></span>&nbsp;Déconnexion</a></li>
                        </ul>
                    </li>

                </ul>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </div><!--/.navbar-collapse -->
        </div>

        <hr>

        <div class="row">
            <div class="col-md-6 col-md-offset-1"><!-- Contenu Seance -->
                <h1>Création d'une Séance</h1>

                <hr>

                <div class="panel panel-default">
                    <div class="panel-heading">Contenu</div>
                    <div class="panel-body">
                        <textarea name="Contenu" cols="30" rows="20" class="form-control"></textarea>
                    </div>
                </div>
            </div><!-- Contenu Seance Fin -->
            <div class="col-md-4"><!-- Colone Droite -->
                <div class="col-md-12"><!-- Caractéristique -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Caractéristiques</div>
                        <div class="panel-body">
                            <div class="input-group margin-bottom-5">
                                <div class="input-group-addon input-group-addon-width-min-80">Classe</div>
                                <input type="text" class="form-control"/>
                                <div class="input-group-addon"><span class="glyphicon glyphicon-chevron-down"></span></div>	
                            </div>
                            <div class="input-group margin-bottom-5">
                                <div class="input-group-addon input-group-addon-width-min-80">Matière</div>
                                <input type="text" class="form-control"/>
                                <div class="input-group-addon"><span class="glyphicon glyphicon-chevron-down"></span></div>
                            </div>
                            <div class="input-group margin-bottom-5">
                                <div class="input-group-addon input-group-addon-width-min-80">Date</div>
                                <input type="text" class="form-control" placeholder="jj/mm/aaaa"/>
                                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
                            </div>							
                            <div class="input-group margin-bottom-5">
                                <div class="input-group-addon input-group-addon-width-min-80">Durée</div>
                                <input type="text" class="form-control" placeholder="En heure"/>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Contrôle continu
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">
                                    Travail à rendre
                                </label>
                            </div>
                            <div class="input-group margin-bottom-5">
                                <div class="input-group-addon input-group-addon-width-min-80">Pour le :</div>
                                <input type="text" class="form-control" placeholder="jj/mm/aaaa" disabled/>
                                <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
                            </div>
                        </div>
                    </div>
                </div><!-- Caractéristique Fin -->

                <div class="col-md-12"><!-- Upload -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Document(s)</div>
                        <div class="panel-body">
                            <button class="btn btn-default btn-block">Ajouter un document</button>
                        </div>
                    </div>
                </div><!-- Divers Fin -->

                <hr>

                <div class="col-md-4 col-md-offset-1">
                    <button class="btn btn-default btn-lg btn-block">Annuler</button>
                </div>
                <div class="col-md-4 col-md-offset-2">
                    <button class="btn btn-primary btn-lg btn-block">Valider</button>
                </div>

            </div><!-- Colone Droite Fin -->
        </div>



        <footer class="footer">
            <a href="#Human.txt">2013 - IronGroup. <span class="glyphicon glyphicon-copyright-mark"></span></a>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="../../js/vendor/bootstrap.min.js"></script>

        <script src="../../js/main.js"></script>
    </body>
</html>
