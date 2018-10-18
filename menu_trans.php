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
        html {
            width: 100%;
            height: 100vh;
        }
        #menu {
            background-color: #9fcdff;
            height: 100vh;
        }
        
        #content {
            background-color: #20c997;
            height: 100vh;
        }
    </style>
</head>
<body>

<div class="container">
    <section class="row">
        <div id="menu" class="col-md-3">
            <nav role="navigation">
              <ul class="nav nav-pills nav-stacked">
                  <li role="presentation">
                      <a href="#" style="display: inline-block; border: 1px solid red;">Artykuly</a>
                      <nav role="navigation" style="border: 1px solid green; display: inline-block">
                          <ul class="nav nav-pills nav-stacked">
                              <li role="presentation"><a href="#">Test 1</a></li>
                              <li role="presentation"><a href="#">Test 2</a></li>
                          </ul>
                      </nav>
                      
                  </li>
                  <li role="presentation" style="clear: both"><a href="#">Media</a></li>
                  <li role="presentation"><a href="#">Translacje</a></li>
                  <li role="presentation"><a href="#">Ustawienia</a></li>
              </ul>
            </nav>
        </div>
        
        <div id="content" class="col-md-9">
xcvxcv
        </div>
    </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
</body>
</html>