<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes It</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    @laravelPWA
    
    <!-- Web Application Manifest -->
    <link rel="manifest" href="/manifest.json">
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#000000">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="PWA">
    <link rel="icon" sizes="512x512" href="/images/icons/icon-512x512.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PWA">
    <link rel="apple-touch-icon" href="/images/icons/icon-512x512.png">

    <link href="/images/icons/splash-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-750x1334.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1242x2208.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-828x1792.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1242x2688.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1536x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1668x2224.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-1668x2388.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons/splash-2048x2732.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/icons/icon-512x512.png">
    <style>
        .feed{
            width: 100%; 
            height: 300px;  
            background-color:lightgray;
            margin: 10px auto;
            box-shadow: 3px 4px 8px black;
        }

        .feed div{
            display:none;
            height: 100px;
        }

        .feed div a{
            color: white !important;
            font-weight:bold;
        }

        .mb-fit div{
            width: 300px; 
            height: 300px;  
            background-color:lightgray;
            border-radius: 10px;
            margin: 20px auto;
            box-shadow: 3px 4px 8px black;
        }

        .modal-body input{
            background-color:black;
            color:white;
            border-color:#1f1f1f !important;
            border-radius:10px;
        }

        .container::-webkit-scrollbar {
            display: none;
        }

        .row{
            margin:0px !important;
        }

        h3{
            margin: 10px 0px 0px 5px; 
            font-weight:bold;
            color: lightgray;;
            text-shadow: 2px 2px gray; 
        }

        body{
            background-color:#000000;
            font-family: 'Noto Serif', !important ;
            padding-bottom:100px;
            
        }

        img{
            image-rendering: -moz-crisp-edges; /* Firefox */
            image-rendering: -o-crisp-edges; /* Opera */
            image-rendering: -webkit-optimize-contrast; /* Webkit (non-standard naming) */
            image-rendering: crisp-edges;
            -ms-interpolation-mode: nearest-neighbor; /* IE (non-standard property) */
        }
        .new-btn{
            box-shadow: 3px 4px 8px black;
        }

        .modal-content{
            height: 800px;
            position:relative;
            background-color: #1f1f1f;
            color:white;
        }

        .modal-footer{
            position:absolute;
            bottom:0;
            width:100%;
        }

        .modal-body input{
            margin: 10px 0px 10px 0px;  
        }

        a{
            text-decoration:none !important;
            color: whitesmoke;
            font-weight: bold;
            font-size: 16px;
        }
       
        #dropdown div:hover{
            background-color:#f0f0f0;
        }

        #dropdown div{
            padding:5px;
        }

    
        .col img{
            filter:drop-shadow(2px 2px 5px #000);
            width:24px;
            height:24px;
        }

        
    </style>
</head>