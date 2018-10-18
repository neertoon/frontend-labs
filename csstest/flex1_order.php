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
        
        .child {
            margin: 10px;
            background-color: #1e7e34;
            padding: 20px;
            color: white;
        }
        
        .a {
            order: 1;
        }

        .b {
            order: 3;
        }

        .c {
            order: 2;
        }
        
        .inline-block { display: inline-block}
    </style>
</head>
<body>

<div id="button" class="child inline-block">
    KOLEJNOSC
</div>

<div class="container">
    <div class="child a">
        a
    </div>

    <div class="child b">
        b
    </div>

    <div class="child c">
        c
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // Jeszcze jakby dodać animację na przejściu kolejności, że się ładnie przesuwa
        // Order może się przydać w przypadku sortowania. Szybko można nadać odpowiednie pozycje pozycjom :D
        // a może jeszcze jakieś wykorzystanie w mobilach
        $('#button').on('click', function () {
            $('.a').css('order', '3');
            $('.b').css('order', '2');
            $('.c').css('order', '1');
        });
    });
</script>
</body>
</html>