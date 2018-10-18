<!doctype html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo __FILE__; ?></title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        
        <!--style-->
        <style>
            .label-warning {
                color: #1b1e21;
            }
            
            .moja-klasa {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>

    <div class="container">
        <section class="row">
            <div class="col-md-12">
                <span class="label label-danger">Jakaś etykieta</span>
                <span class="label label-warning">Jakaś etykieta</span>
                <span class="label label-primary">Jakaś etykieta</span>
                <br />
                Poczta <span class="badge moja-klasa">4</span>
                <br />
                <p class="well">A to jest treść we wstawce</p>
                <br />
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Nagłówek
                    </div>
                    <div class="panel-body">
                        To jest panel
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">A to tytuł</h3>
<!--                        <h3>A to tytuł</h3>-->
<!--                        A to tytuł-->
                    </div>
                    <div class="panel-body">
                        To jest panel
                    </div>
                    <div class="panel-footer">
                        Stopka
                    </div>
                </div>
                <br />
                <div class="jumbotron">
                    <h1>Taki nagłówke</h1>
                    <p>A tutaj treść</p>
                </div>
            </div>
        </section>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    </body>
</html>