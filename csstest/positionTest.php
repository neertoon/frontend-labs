<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tranform 3D</title>

    <style>
        html {
            box-sizing: border-box; /* To powoduje, że 50% powinno zachowywać się dobrze, ale chyba display inline block robi se jaja */
            margin: 0;
            padding: 0;
        }
        
        * {
            box-sizing: inherit;
            margin: inherit;
            padding: inherit;
        }
        
        body {
            width: 100%;
            height: 100%;
            background-color: #ced4da;
        }
        
        div {
            display: inline-block;
        }
        
        .stat {
            width: 48%;
            height: 200px;
            border: 1px solid #1e7e34;
        }

        .rel {
            width: 48%; /* A powinno działać dla 50%. Rozszyfruj to też */
            height: 200px;
            border: 1px solid #005cbf;
            position: relative;
            top: 10px; /* dodatkowo daje możliwość modyfikowania położenia względem elementu najbliższego czego nie ma przy static*/
        }
        
        .pod {
            display: block;
            position: absolute;
            background-color: #80bdff;
            width: 40%;
            height: 100px;
            top: 0;
        }
    </style>
</head>
<body>
<h1>TYTUL</h1>
<h2>Jakis podtytul</h2>
<div class="stat">
    <div class="pod">
        Element ABSOLUTE wewnątrz elementu statystycznego (parametry top left width i height działają wg BODY)
    </div>
</div>

<div class="rel">
    <div class="pod">
        Element ABSOLUTE wewnątrz elementu RELATIVE (wg niego działają parametry top left width i height)
    </div>
</div>

</body>
</html>