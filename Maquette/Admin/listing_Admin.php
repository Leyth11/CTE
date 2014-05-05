<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Listing - CTE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/datepicker.css">
        <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../../css/main.css">
        <style>
            body {
                padding-top: 40px;
                padding-bottom: 0px;
            }
        </style>
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
                    <li class="active"><a href="#listing"><span class="glyphicon glyphicon-book glyphicon-lg"></span>&nbsp;Séances</a></li>
                    <li><a href="#nouvelle"><span class="glyphicon glyphicon-file glyphicon-lg"></span>&nbsp;Nouvelle Séance</a></li>
                    <li><a href="#controles"><span class="glyphicon glyphicon-inbox glyphicon-lg"></span>&nbsp;Contrôles <span class="badge">3</span></a></li>
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


        <div class="row">
            <div class="col-lg-6 col-md-offset-1"><!--Listing-->
                <hr>
                <h2>Listes des Séances</h2>
                <hr>
                <table class="table table-hover vertical-align-middle">
                    <tr>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Classe</th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Matière</th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Date - Heure</th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Durée</th>
                        <th class="td-center"><span class="glyphicon glyphicon-sort gray"></span> Contrôle</span></th>
                        <th class="td-center"><span class="glyphicon glyphicon-sort gray"></span> Ip</span></th>
                        <th><span class="glyphicon glyphicon-sort gray"></span> Professeur</span></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>B2</td>
                        <td>Projet</td>
                        <td>16/11/2013 08h15</td>
                        <td>4 heures</td>
                        <td></td>
                        <td>0.0.0.0</td>
                        <td>Prof1</td>
                        <td>
                            <button class="btn btn-default">Modifier</button>
                        </td>
                        <td>
                            <input type="checkbox" />
                        </td>
                    </tr>
                    <tr>
                        <td>B1</td>
                        <td>Analyse</td>
                        <td>15/11/2013 15h40</td>
                        <td>2 heures</td>
                        <td class="td-center"><span class="glyphicon glyphicon-ok green"></span></td>
                        <td>0.0.0.0</td>
                        <td>Prof1</td>
                        <td>
                            <button class="btn btn-default">Modifier</button>
                        </td>
                        <td>
                            <input type="checkbox" />
                        </td>
                    </tr>
                    <tr>
                        <td>I5</td>
                        <td>Projet</td>
                        <td>15/11/2013 08h15</td>
                        <td>4 heures</td>
                        <td></td>
                        <td>0.0.0.0</td>
                        <td>Prof1</td>
                        <td>
                            <button class="btn btn-default">Modifier</button>
                        </td>
                        <td>
                            <input type="checkbox" />
                        </td>
                    </tr>
                    <tr>
                        <td>I4</td>
                        <td>Projet</td>
                        <td>14/11/2013 13h40</td>
                        <td>4 heures</td>
                        <td></td>
                        <td>0.0.0.0</td>
                        <td>Prof1</td>
                        <td>
                            <button class="btn btn-default">Modifier</button>
                        </td>
                        <td>
                            <input type="checkbox" />
                        </td>
                    </tr>
                    <tr>
                        <td>B2</td>
                        <td>Analyse</td>
                        <td>14/11/2013 08h15</td>
                        <td>4 heures</td>
                        <td></td>
                        <td>0.0.0.0</td>
                        <td>Prof1</td>
                        <td>
                            <button class="btn btn-default">Modifier</button>
                        </td>
                        <td>
                            <input type="checkbox" />
                        </td>
                    </tr>
                    <tr>
                        <td>I4</td>
                        <td>Analyse</td>
                        <td>13/11/2013 13h40</td>
                        <td>4 heures</td>
                        <td></td>
                        <td>0.0.0.0</td>
                        <td>Prof1</td>
                        <td>
                            <button class="btn btn-default">Modifier</button>
                        </td>
                        <td>
                            <input type="checkbox" />
                        </td>
                    </tr>
                    <tr>
                        <td>B1</td>
                        <td>Projet</td>
                        <td>13/11/2013 08h15</td>
                        <td>4 heures</td>
                        <td></td>
                        <td>0.0.0.0</td>
                        <td>Prof1</td>
                        <td>
                            <button class="btn btn-default">Modifier</button>
                        </td>
                        <td>
                            <input type="checkbox" />
                        </td>
                    </tr>
                    <tr>
                        <td>I4</td>
                        <td>Merise</td>
                        <td>12/11/2013 10h15</td>
                        <td>2 heures</td>
                        <td class="td-center"><span class="glyphicon glyphicon-ok green"></td>
                        <td>0.0.0.0</td>
                        <td>Prof1</td>
                        <td>
                            <button class="btn btn-default">Modifier</button>
                        </td>
                        <td>
                            <input type="checkbox" />
                        </td>
                    </tr>
                    <tr>
                        <td>I4</td>
                        <td>Merise</td>
                        <td>12/11/2013 08h15</td>
                        <td>2 heures</td>
                        <td></td>
                        <td>0.0.0.0</td>
                        <td>Prof1</td>
                        <td>
                            <button class="btn btn-default">Modifier</button>
                        </td>
                        <td>
                            <input type="checkbox" />
                        </td>
                    </tr>
                </table>
                <div>
                    <ul class="pager">
                        <li class="previous"><a href="#" class="black">&larr; Older</a></li>
                        <li class="next"><a href="#" class="black">Newer &rarr;</a></li>
                    </ul>
                </div>
            </div><!--Listing fin -->

            <div class="col-md-4"><!-- Colone Droite -->
                <hr>			
                <div class="row"><!-- Recherche -->
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Recherche</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group margin-bottom-5">
                                            <div class="input-group-addon input-group-addon-width-min-80">Ip</div>
                                            <input type="text" class="form-control"/>
                                            <div class="input-group-addon"><span class="glyphicon glyphicon-chevron-down"></span></div>	
                                        </div>
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
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group margin-bottom-5">
                                            <div class="input-group-addon input-group-addon-width-min-80">Prof.</div>
                                            <input type="text" class="form-control"/>
                                            <div class="input-group-addon"><span class="glyphicon glyphicon-chevron-down"></span></div>	
                                        </div>
                                        <div class="input-group margin-bottom-5">
                                            <div class="input-group-addon input-group-addon-width-min-80">Controle</div>
                                            <input type="text" class="form-control"/>
                                            <div class="input-group-addon"><span class="glyphicon glyphicon-chevron-down"></span></div>	
                                        </div>
                                        <div class="input-group margin-bottom-5">
                                            <div class="input-group-addon input-group-addon-width-min-80">Durée</div>
                                            <input type="text" class="form-control" placeholder="En heure"/>
                                        </div>
                                        <div class="input-group margin-bottom-5">
                                            <div class="input-group-addon input-group-addon-width-min-80">Contient</div>
                                            <input type="text" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-default btn-block">Lancer la recherche</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Recherche Fin -->

                <div class="row"><!-- Calendrier -->
                    <div class="col-md-7 col-md-offset-2">
                        <div class="datepicker"></div>
                    </div>
                </div><!-- Calendrier Fin -->

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
