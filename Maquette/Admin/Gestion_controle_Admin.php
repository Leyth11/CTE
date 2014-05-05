<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Contrôles - CTE</title>
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
                    <li class="active"><a href="#controles"><span class="glyphicon glyphicon-inbox glyphicon-lg"></span>&nbsp;Contrôles <span class="badge">3</span></a></li>
                    <li><a href="#nouvelle"><span class="glyphicon glyphicon-list-alt glyphicon-lg"></span>&nbsp;Historique</a></li>
                    <li><a href="#nouvelle"><span class="glyphicon glyphicon-cog glyphicon-lg"></span>&nbsp;Gestion des comptes</a></li>
                    <li><a href="#nouvelle"><span class="glyphicon glyphicon-cloud-upload glyphicon-lg"></span>&nbsp;Importation</a></li>
                    <li><a href="#nouvelle"><span class="glyphicon glyphicon-cloud-download glyphicon-lg"></span>&nbsp;Exportation</a></li>
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
            <br>
            <div class="row">
                <div class="col-md-4 col-md-offset-8">
                    <div class="input-group margin-bottom-5">
                        <div class="input-group-addon input-group-addon-width-min-80">Prof.</div>
                        <input type="text" class="form-control" value="Prof1"/>
                        <div class="input-group-addon"><span class="glyphicon glyphicon-chevron-down"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <h1>En attente de correction</h1>

                <table class="table table-hover vertical-align-middle">
                    <tr>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Classe</th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Matière</th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Date - Heure</th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Durée</th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Professeur</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>B1</td>
                        <td>Analyse</td>
                        <td>15/11/2013 15h40</td>
                        <td>2 heures</td>
                        <td>Prof1</td>
                        <td class="td-center">
                            <button class="btn btn-default">Voir la séance</button>
                        </td>
                    </tr>
                    <tr>
                        <td>I4</td>
                        <td>Merise</td>
                        <td>12/11/2013 10h15</td>
                        <td>2 heures</td>
                        <td>Prof1</td>
                        <td class="td-center">
                            <button class="btn btn-default">Voir la séance</button>
                        </td>
                    </tr>
                    <tr>
                        <td>B2</td>
                        <td>Analyse</td>
                        <td>08/11/2013 8h15</td>
                        <td>2 heures</td>
                        <td>Prof1</td>
                        <td class="td-center">
                            <button class="btn btn-default">Voir la séance</button>
                        </td>
                    </tr>
                </table>

                <hr>

            </div>
            <div class="col-md-10 col-md-offset-1">
                <h1>Historique des controles</h1>

                <hr>

                <table class="table table-hover vertical-align-middle">
                    <tr>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Classe</th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Matière</th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Date - Heure</th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Durée</th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Professeur</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>B1</td>
                        <td>Analyse</td>
                        <td>15/11/2013 15h40</td>
                        <td>2 heures</td>
                        <td>Prof1</td>
                        <td class="td-center">
                            <button class="btn btn-default">Voir la séance</button>
                        </td>
                    </tr>
                    <tr>
                        <td>I4</td>
                        <td>Merise</td>
                        <td>12/11/2013 10h15</td>
                        <td>2 heures</td>
                        <td>Prof1</td>
                        <td class="td-center">
                            <button class="btn btn-default">Voir la séance</button>
                        </td>
                    </tr>
                    <tr>
                        <td>B2</td>
                        <td>Analyse</td>
                        <td>08/11/2013 8h15</td>
                        <td>2 heures</td>
                        <td>Prof1</td>
                        <td class="td-center">
                            <button class="btn btn-default">Voir la séance</button>
                        </td>
                    </tr>
                    <tr>
                        <td>I4</td>
                        <td>Merise</td>
                        <td>12/11/2013 10h15</td>
                        <td>2 heures</td>
                        <td>Prof1</td>
                        <td class="td-center">
                            <button class="btn btn-default">Voir la séance</button>
                        </td>
                    </tr>
                    <tr>
                        <td>B2</td>
                        <td>Analyse</td>
                        <td>08/11/2013 8h15</td>
                        <td>2 heures</td>
                        <td>Prof1</td>
                        <td class="td-center">
                            <button class="btn btn-default">Voir la séance</button>
                        </td>
                    </tr>
                </table>
                <div>
                    <ul class="pager">
                        <li class="previous"><a href="#" class="black">&larr; Older</a></li>
                        <li class="next"><a href="#" class="black">Newer &rarr;</a></li>
                    </ul>
                </div>
            </div>

            <hr>

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
