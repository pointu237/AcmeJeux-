<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animal de ferme</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/updated-styles.css" rel="stylesheet">

</head>

<body id="color-body">

    <div class="container-fluid">

        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" id="back-text" href="ListeJeux.php"><span class="glyphicon glyphicon-chevron-left"></span>ACME Jeux d'enfant</a>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="jumbotron" style="background: gray; border-radius: 0px;">
                <div class="container-fluid text-center">
                    <h1>Identifie les animaux de la ferme<sup><strong style="font-size: 65%">1.0</strong></sup></h1>
                    <p>quel sera votre score ?</p>
                    <button type="button" class="btn btn-reset" onClick="history.go(0)">Recommencer</button>
                </div>
            </div>
        </div>

        <div class="row" id="image-container">

            <div class="container-fluid quiz-image img-grow">

                <div class="row">
                    <div class="col-md-6 col-sm-4 col-xs-12 text-center">
                        <h3 id="qNo"></h3>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                        <h3>Réponse précedente: <h4 id="answer"></h4></h3>
                    </div>
                </div>

                <img src="" id="Pic" class="img-responsive img-rounded">

            </div>
        </div>

        <br>

        <div class="row">
            <div class="container-fluid">
                <ul id="image-options" class="list-inline text-center">
                    <li class="space-list">
                        <button id="opt1" class="btn btn-info" onclick="NextQuestion('1')">Choix 1</button>
                    </li>
                    <li class="space-list">
                        <button id="opt2" class="btn btn-info" onclick="NextQuestion('2')">Choix 2</button>
                    </li>
                    <li class="space-list">
                        <button id="opt3" class="btn btn-info" onclick="NextQuestion('3')">Choix 3</button>
                    </li>
                    <li>
                        <button id="opt4" class="btn btn-info" onclick="NextQuestion('4')">Choix 4</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container-fluid block-center">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermé</span>

                                </button>
                                <h2 class="modal-title text-center" id="myModalLabel">Terminé!</h2>

                            </div>
                            <div class="container-fluid text-center">
                                <h4 class="modal-body"></h4>
                                <br>
                                <h5 class="modal-body-2"></h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Fermé</button>
                                <button type="button" class="btn btn-reset" onClick="history.go(0)">Recommencer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="row container-fluid">
                <div class="text-center">
                    <h5 class="h1-small">Nathan Lapointe<sup>2017</sup></h5>
                </div>
            </div>
        </footer>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/quiz.js"></script>



</body>

</html>