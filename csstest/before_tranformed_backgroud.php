<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
<!--    <meta http-equiv="x-ua-compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>Tranform 3D</title>

    <style>
        .divek {
            width: 50%;
            height: 200px;
            background-color: #005cbf;
            position: relative;
            margin-top: 100px;
        }

        /*https://stackoverflow.com/questions/3032856/is-it-possible-to-set-the-stacking-order-of-pseudo-elements-below-their-parent-e*/
        .divek:before {
            z-index: -1;
            content: "";
            width: 100%;
            height: 100px;
            display: block;
            position: absolute;
            background-color: red;
            top: -10px;
            transform: skewY(2deg);
        }
        
        .upper {
            /*margin-bottom: 200px;*/
            background-color: green;
            height: 100px;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="upper">
    
</div>

<div class="divek">
    
</div>

</body>
</html>