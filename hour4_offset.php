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
            <div class="col-sm-3">Kolumna 1</div>
            <section class="col-sm-3">Kolumna 2</section>
            <div class="col-sm-3">Kolumna 3</div>
        </div>
        
        <div class="row">
            <div class="col-sm-3 col-sm-offset-2">Kolumna 1</div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    </body>
</html>