<!DOCTYPE html>
<html style="height:  100%; width: 100%;">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Affray Studios - Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
        <link rel="stylesheet" href="css/animate.css">
        <script src="js/main.js"></script>
    </head>
    <body>
        <div id="headerContent">

            <div class="overlay">
                <div class="title-text animated fadeInLeft" style="color: white; top: 40%;"><i><span style="padding-right: 220px;">SCP:</span></i></div> 
                <div class="title-text animated fadeInRight" style="color: white; top: 40%;"><i><span style="padding-left: 175px;">Acension</span></i></div>
            </div>

            <video poster="https://cdn.discordapp.com/attachments/387214196699561995/400697039748333598/scplogoofficial.png" autoplay="true" loop>
                <source src="https://youtu.be/D2ZCwMp6vRw">
            </video>
        </div>
        <style>

            .overlay{
                width: 100%;
                height: 100%;
                position: absolute;
                display: flex;
            }

            #headerContent {
                width: 100%;
                height: 60%;
                overflow: hidden;
                position: absolute;
                left: 0;
                top: 0;
                box-shadow: 0px 3px 5px 2px #a5a5a5;
                border-bottom: 1px solid gray;
            }

            video {
                position: inherit;
                min-width: 100%;
                overflow: hidden;
                z-index: -1;
            }

            .title-text {
                text-align: center;
                font-size: 4em;
                z-index: 9999;
                width: 100%;
                height: 60%;
                position: absolute;
                color: white;
                transform: translate(-50%,-50%);
            }

        </style>
    </body>
</html>


