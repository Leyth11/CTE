<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gestion du compte - CTE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/datepicker.css">
        <style>
            body {
                padding-top: 50px;
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
                    <li><a href="#nouvelle"><span class="glyphicon glyphicon-file glyphicon-lg"></span>&nbsp;Nouvelle Séance</a></li>
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
        <div class="container">

            <div class="row">
                <hr>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default"> <!-- Gestion du compte -->
                                <div class="panel-heading"><h4>Gestion du compte</h4></div>
                                <div class="panel-body">
                                    <div class="col-md-10 col-md-offset-1 HCenter">
                                        <h2>Login : [CompteUtilisateur]</h2>
                                        <br>
                                        <button class="btn btn-default btn-lg btn-block">Génerer un nouveau mot de passe</button>
                                    </div>
                                </div>
                            </div><!-- Gestion du compte Fin -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Matières affiliées</h4></div>
                                <div class="panel-body">
                                    <table class="table table-condensed HCenter no-margin-bottom">
                                        <tr><td>Projet</td></tr>
                                        <tr><td>Analyse</td></tr>
                                        <tr><td>Merise</td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Statistiques</h4></div>
                                <div class="panel-body">
                                    <table class="table table-hover no-margin-bottom">
                                        <tr><td>Nombres de Matières :</td><td>3</td></tr>
                                        <tr><td>Nombres de Séances crées :</td><td>19</td></tr>
                                        <tr><td>Nombres de Contrôles donnés :</td><td>5</td></tr>
                                        <tr><td>Date de dernière séance :</td><td>16/11/2013</td></tr>
                                        <tr><td>Date de dernier contrôle :</td><td>15/11/2013</td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <div class="datepicker HCenter"></div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <a href="#Human.txt">2013 - IronGroup. <span class="glyphicon glyphicon-copyright-mark"></span></a>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="../../js/vendor/bootstrap.min.js"></script>
        <script src="../../js/bootstrap-datepicker.js"></script>

        <script src="../../js/main.js"></script>
        <script>
            $('.datepicker').datepicker({
                language: "fr",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                todayHighlight: true
            })
        </script>
    </body>
</html>
