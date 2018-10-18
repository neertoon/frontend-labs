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
                <form action="#" class="form-horizontal">
                    <div class="form-group">
                        <span id="pole_pomocy" class="help-block">To jest pomoc</span>
                        <select id="dropdown" class="form-control input-sm" aria-describedby="pole_pomocy">
                            <option>Opcja</option>
                            <option>Jeden</option>
                            <option>Dwa</option>
                        </select>
                        
                        <div class="input-group">
                            <label for="Kwota" class="sr-only">Kwota</label>
                            <div class="input-group-addon">$</div>
                            <div><input type="number" required id="Kwota" placeholder="Kwota" class="form-control" /> </div>
                            <div class="input-group-addon">,00</div>
                        </div>
                        
                        <br />
                        
                        <p>
                            <div class="input-group input-group-lg">
                                <label for="uzytkownik" class="sr-only">Użytkownik</label>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" required id="email" placeholder="użytkownik" class="form-control">
                            </div>
                        </p>
                    </div>
                </form>
                
            </div>
        </section>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    </body>
</html>