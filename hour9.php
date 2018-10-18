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
           
        </style>
    </head>
    <body>

    <div class="container">
        <section class="row">
            <div class="col-md-12">
                <p class="form-control-static">mail@moj.pl</p>
                <form action="#" class="form-horizontal">
                    <div class="form-group">
                    <label for="Imię" class="col-sm-3 control-label">Imię</label>
                        <div class="col-sm-9">
                            <input type="text" autofocus required id="Imię" placeholder="Imię" class="form-control"><br>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="Nazwisko" class="control-label">Nazwisko</label>
                    <input type="text" required id="Nazwisko" placeholder="Nazwisko" class="form-control"><br>
                    </div>
                    <div class="form-group">
                    <label for="Mail" class="control-label">Mail</label>
                    <input type="email" required id="Mail" placeholder="Mail" class="form-control"><br>
                    </div>
                    <div class="form-group">
                    <label for="Tel" class="control-label">Tel</label>
                    <input type="tel" required id="Tel" placeholder="Tel" pattern="\([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}\" class="form-control"><br>
                    </div>
                    <div class="form-group">
                    <label for="Kraj" class="control-label">Kraj</label>
                    <select id="Kraj" class="form-control">
                        <option>Polska</option>
                        <option>Węgry</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <input type="submit" value="Wyślij" class="form-control">
                    </div>
                </form>
                
            </div>
        </section>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    </body>
</html>