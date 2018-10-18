<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tranform 3D</title>

    <style>
        .container {
            display: flex;
            /*flex-wrap: wrap;*/
            border: 1px solid red;
        }
        
        .child {
            margin: 10px;
            background-color: #1e7e34;
            padding: 20px;
            color: white;
        }
        
        .a {
            /*flex-grow: 1;*/
            /*flex-shrink: 1;*/
            /*flex-basis: 200px;*/
            /* to poniżej to to samo co powyżej*/
            flex: 1 1 200px;
        }

        .b {
            flex-grow: 2;
            /* Ten parametr mówi, w jakich proporcjach ma się zeskalować obiekt, jeśli jego rozmiar przekroczy rozmiar kontenera. Dlatego użyłem flex-basis żeby wymusić jakiś rozmiar.*/
            /* Inaczej nie ma efektu */
            /* https://developer.mozilla.org/en-US/docs/Web/CSS/flex-shrink */
            flex-shrink: 4; 
            flex-basis: 200px;
        }

        .c {
            flex: 3 9 200px;
        }
        
        .inline-block { display: inline-block}
    </style>
</head>
<body>

<div id="button" class="child inline-block">
    NIEAKTYWNE
</div>

<div class="container">
    <div class="child a">
        1
    </div>

    <div class="child b">
        2
    </div>

    <div class="child c">
        3
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        
    });
</script>
</body>
</html>