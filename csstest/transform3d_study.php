<!doctype html>
<html lang="pl">
<head>
    <!--https://webdesign.tutsplus.com/tutorials/create-an-isometric-layout-with-3d-transforms--cms-27134-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tranform 3D</title>
    
    <style>
        html {
            box-sizing: border-box; /* szerokość realna odpowiada szerokości opisanej w css od której odejmuje się border i padding */
            /*background-color: #fbfbf1;*/
        }

        body:before{
            content:'';
            position: fixed;
            top: 0;
            bottom: 0;
            width: 100%;
            z-index: -1;
            background: linear-gradient(to right bottom, rgba(255,255,255,0.2), #a9c1c6 90%);
        }
        
        *, *:before, *:after {
            box-sizing: inherit;
        }
        
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
        figure {
            margin: 0;
        }
        
        .row {
            border: 1px solid red;
            width: 960px;
            display: flex;
            flex-wrap: wrap; /* zawijanie - ma to wpływ na rozmiar elementów. Jeśli nie ma zawijania to elementy będą się zmniejszać do rozmiaru kontenera czyli max 100% */
            justify-content: flex-end; /* Wyruwnaj elementy do prawej (lub dołu w przypadku kolumny) */
            transform: rotateX(60deg) rotateY(0deg) rotateZ(-45deg);
        }
        
        .column {
            padding: 20px;
            width: 50%;
            max-width: 50%;
            flex: 1 1 50%; /* elementy mają być proporconalne względem siebie, proporcjonalne gdy dziecko większe niż kontener i docelowo 50% szerokości kontenera jeśli można */
        }
        
        .row,
        .column,
        .ItemCard,
        .ItemCard__dest,
        .ItemCard__thumb {
            /*position: relative;*/
            /*backface-visibility: hidden;*/
            transform-style: preserve-3d; /* To teoretycznie mówi o tym, że dzieci mają być w przestrzeni 3d. Ale ciekawe, pierwszy rodzic może być w 3d względem body */
        }
        
        .cover {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .ItemCard__thumb img {
            position: relative;
            z-index: 1;
            transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            transform: translate3d(0, 0, 20px);
        }
        
        .shadow {
            display: block;
            transition: all 0.3s cubic-bezier(0.65, 0.84, 0.44, 1);
            opacity: .9;
            background-color: rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.1);
        }
        
        .column:hover .ItemCard__dest {
            z-index: 10;
        }
        
        .column:hover .ItemCard__dest,
        .column:hover .ItemCard__thumb img {
            transform: translate3d(0, 0, 50px) rotateX(-5deg);
            transform-origin: center bottom;
        }
        
        .column:hover .ItemCard__thumb .shadow {
            opacity: .6;
            background-color: rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 10px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="row">
    <div class="column">
        <div class="ItemCard">
            <a class="ItemCard__dest cover" href="http://www.google.pl"></a>
            <figure class="ItemCard__thumb">
                <img src="https://images.pexels.com/photos/1084188/pexels-photo-1084188.jpeg?cs=srgb&dl=beach-beautiful-blur-1084188.jpg&fm=jpg" height="340" width="510" alt="">
                <span class="shadow cover"></span>
            </figure>
        </div>
    </div>

    <div class="column">
        <div class="ItemCard">
            <a class="ItemCard__dest cover" href="#1"></a>
            <figure class="ItemCard__thumb">
                <img src="https://images.pexels.com/photos/1058683/pexels-photo-1058683.jpeg?cs=srgb&dl=architecture-buildings-business-1058683.jpg&fm=jpg" height="340" width="510" alt="">
                <span class="shadow cover"></span>
            </figure>
        </div>
    </div>

    <div class="column">
        <div class="ItemCard">
            <a class="ItemCard__dest cover" href="#1"></a>
            <figure class="ItemCard__thumb">
                <img src="https://images.pexels.com/photos/614513/pexels-photo-614513.jpeg?cs=srgb&dl=beach-black-sand-calmness-614513.jpg&fm=jpg" height="340" width="510" alt="">
                <span class="shadow cover"></span>
            </figure>
        </div>
    </div>

    <div class="column">
        <div class="ItemCard">
            <a class="ItemCard__dest cover" href="#1"></a>
            <figure class="ItemCard__thumb">
                <img src="https://images.pexels.com/photos/1238380/pexels-photo-1238380.jpeg?cs=srgb&dl=beautiful-bee-blooming-1238380.jpg&fm=jpg" height="340" width="510" alt="">
                <span class="shadow cover"></span>
            </figure>
        </div>
    </div>

    <div class="column">
        <div class="ItemCard">
            <a class="ItemCard__dest cover" href="#1"></a>
            <figure class="ItemCard__thumb">
                <img src="https://images.pexels.com/photos/1239221/pexels-photo-1239221.jpeg?cs=srgb&dl=blanket-comfort-couch-1239221.jpg&fm=jpg" height="340" width="510" alt="">
                <span class="shadow cover"></span>
            </figure>
        </div>
    </div>

    <div class="column">
        <div class="ItemCard">
            <a class="ItemCard__dest cover" href="#1"></a>
            <figure class="ItemCard__thumb">
                <img src="https://images.pexels.com/photos/243757/pexels-photo-243757.jpeg?cs=srgb&dl=camera-canon-dslr-243757.jpg&fm=jpg" height="340" width="510" alt="">
                <span class="shadow cover"></span>
            </figure>
        </div>
    </div>

    <div class="column">
        <div class="ItemCard">
            <a class="ItemCard__dest cover" href="#1"></a>
            <figure class="ItemCard__thumb">
                <img src="https://images.pexels.com/photos/421788/pexels-photo-421788.jpeg?cs=srgb&dl=aerial-aerial-photography-beach-421788.jpg&fm=jpg" height="340" width="510" alt="">
                <span class="shadow cover"></span>
            </figure>
        </div>
    </div>

    <div class="column">
        <div class="ItemCard">
            <a class="ItemCard__dest cover" href="#1"></a>
            <figure class="ItemCard__thumb">
                <img src="https://images.pexels.com/photos/1232150/pexels-photo-1232150.jpeg?cs=srgb&dl=citrus-close-up-delicious-1232150.jpg&fm=jpg" height="340" width="510" alt="">
                <span class="shadow cover"></span>
            </figure>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>