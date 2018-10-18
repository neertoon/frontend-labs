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
        }
        
        .container2 {
            display: flex;
            flex-wrap: wrap;
        }
        
        .child {
            margin: 10px;
            background-color: #1e7e34;
            padding: 20px;
            color: white;
        }
        
        .a {
        }

        .b {
        }

        .c {
        }
        
        .inline-block { display: inline-block}
    </style>
</head>
<body>
<h2>Bez zwijania - ściaśnia a jak nie da rady to pokazuje się scroll</h2>
<h3 style="color: green">Dobre gdy potrzeba stałego umiejscowienia elementów ale może zmieniać się rozmiar zawartości</h3>
<h3 style="color: red">Marne na wersjach mobilnych</h3>
<div class="container">
    <div class="child a">
        Bardzo dlugi tekst A Bardzo dlugi tekst A Bardzo dlugi tekst A
    </div>

    <div class="child b">
        Bardzo dlugi tekst b Bardzo dlugi tekst b Bardzo dlugi tekst b 
    </div>

    <div class="child c">
        Bardzo dlugi tekst C Bardzo dlugi tekst C Bardzo dlugi tekst C 
    </div>

    <div class="child d">
        Bardzo dlugi tekst D
    </div>

    <div class="child e">
        Bardzo dlugi tekst E
    </div>

    <div class="child f">
        Bardzo dlugi tekst F
    </div>

    <div class="child g">
        Bardzo dlugi tekst G
    </div>
</div>

<h2>Ze zwijaniem - dostosowywuje się do strony</h2>
<div class="container2">
    <div class="child a">
        Bardzo dlugi tekst A Bardzo dlugi tekst A Bardzo dlugi tekst A
    </div>

    <div class="child b">
        Bardzo dlugi tekst b Bardzo dlugi tekst b Bardzo dlugi tekst b
    </div>

    <div class="child c">
        Bardzo dlugi tekst C Bardzo dlugi tekst C Bardzo dlugi tekst C
    </div>

    <div class="child d">
        Bardzo dlugi tekst D
    </div>

    <div class="child e">
        Bardzo dlugi tekst E
    </div>

    <div class="child f">
        Bardzo dlugi tekst F
    </div>

    <div class="child g">
        Bardzo dlugi tekst G
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
    });
</script>
</body>
</html>
