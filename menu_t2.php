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
        
        .vert {
            display:inline-block;
            padding-right:0.25em;
            margin-right:-999px;
            transform-origin: top left;
            transform: rotate(-90deg) translate(-100%);
        }
    </style>
</head>
<body>

<div class="container">
    <section class="row">
        <div id="menu" class="col-md-3">
            <div style="border: 1px dotted white; display: flex;">
                <div style="border: 1px solid black; flex: 1;"><span class="vert">Artykuly</span></div>
                <div style="border: 1px solid yellow; flex: 1;">
                    <div >aaa</div>
                    <div >bbb</div>
                    <div >bbb</div>
                    <div >bbb</div>
                </div>
            </div>
            
            <div style="border: 1px solid blue">
                <span>Media</span>
            </div>
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