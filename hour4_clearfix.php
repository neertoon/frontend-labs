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
            div {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-3">To jest pierwsza bardzo długa kolumna która nie będzie dobrze wyśiwetlana na wszystkich urządzeniach i będzie się wylewać!!!!</div>
            <div class="col-xs-6 col-sm-3">Kolumna 2</div>
            <div class="clearfix visible-xs-block"></div>
            <div class="col-xs-6 col-sm-3">Kolumna 3</div>
            <div class="col-xs-6 col-sm-3">Kolumna 4</div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    </body>
</html>