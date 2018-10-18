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
            flex-direction: column-reverse;
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
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
    });
</script>
</body>
</html>