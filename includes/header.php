<!DOCTYPE html>
<html>
  <head>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Smartshop</title>
      <link rel="icon" href="src/img/icon.png">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- font-awesome -->
      <link rel="stylesheet" href="src/css/font-awesome-4.6.3/css/font-awesome.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="src/css/materialize.min.css"  media="screen,projection"/>
      <!-- animate css -->
      <link rel="stylesheet" href="src/css/animate.css-master/animate.min.css">
      <!-- My own style -->
      <link rel="stylesheet" href="src/css/style.css">
      <!-- Progress bar -->
      <link rel='stylesheet' href='src/css/nprogress.css'/>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="jquery.interactive_3d.js"></script>
        // TODO:  ala espera de cambios no funciona con ccss añadir al proximo css nuestro
        <style>

            .credit a {
                color: #08C;
                text-decoration: none;
                font-weight: bold;
            }


            .page_container {
                overflow:hidden;
                max-width: 1000px;
                margin: 0 auto;
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                padding: 40px 20px;
                background: white;
            }
            .page_container .interactive_3d {
                position: relative;
            }
            .page_container .interactive_3d > img{
                position: relative;
                float: left;
                left: 0;
                width: 333px;
            }
            .caption {
                float: right;
                width: 555px;
                text-align: left;
            }
            @media screen and (max-width: 948px) {
                .caption {
                    width: 100%;
                    float: left;
                    text-align: center;
                    padding: 0 25px;
                    box-sizing: border-box;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    margin-bottom: 45px;
                }
                .main h1 {
                    margin-top: 15px;
                }
                .credit {
                    text-align: center;
                }
                .page_container .interactive_3d > img {
                    width: 100%;
                    max-width: 333px;
                    float: none;
                }
            }
        </style>
    </head>
  <body>
