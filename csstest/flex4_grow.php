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
            flex-wrap: wrap;
        }
        
        .child {
            margin: 10px;
            background-color: #1e7e34;
            padding: 20px;
            color: white;
            /* W przypadku zmian parametru flex-grow */
            transition: flex-grow .5s; 
        }
        
        .a {
            flex-grow: 1;
        }

        .b {
            flex-grow: 2;
        }

        .c {
            flex-grow: 3;
        }
        
        .inline-block { display: inline-block}
    </style>
</head>
<body>

<div id="button" class="child inline-block">
    KLIK NA MNIE LUB LITERE
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
        $('#button').on('click', function () {
            $('.a').css('flex-grow', '10');
            $('.b').css('flex-grow', '1');
            $('.c').css('flex-grow', '1');
        });
        
        $('.child').on('click', function () {
            $('.child').css('flex-grow', '1');
            $(this).css('flex-grow', '100');
        });
    });
</script>
</body>
</html>