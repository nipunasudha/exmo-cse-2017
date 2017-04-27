<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link href="bower_components/lightbox2/dist/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/general.css">


    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <title>EXMO CSE 2017</title>
</head>
<body>
<img id="header-banner" src="img/exmo_header.png" alt="">
<div class="container-exmo">
    <img class="section-heading" src="img/headings/h_map.png" alt="">

    <div class="row map-container">
        <img id="map-lg" src="img/map_h.png" alt="">
        <a data-lightbox="image-1" data-title="My caption" href="img/slides/1.jpg"
           style="top: 10%; left: 10%; width: 16%; height: 40%;"></a>
        <a data-lightbox="image-1" data-title="My caption" href="img/slides/2.jpg"
           style="top: 10%; left: 26%; width: 16%; height: 40%;"></a>
        <a data-lightbox="image-1" data-title="My caption" href="img/slides/3.jpg"
           style="top: 10%; left: 42%; width: 16%; height: 40%;"></a>
        <a data-lightbox="image-1" data-title="My caption" href="img/slides/4.jpg"
           style="top: 10%; left: 58%; width: 16%; height: 40%;"></a>
        <a data-lightbox="image-1" data-title="My caption" href="img/slides/5.jpg"
           style="top: 10%; left: 74%; width: 16%; height: 40%;"></a>
        <a data-lightbox="image-1" data-title="My caption" href="img/slides/6.jpg"
           style="top: 50%; left: 10%; width: 16%; height: 40%;"></a>
        <a data-lightbox="image-1" data-title="My caption" href="img/slides/7.jpg"
           style="top: 50%; left: 26%; width: 16%; height: 40%;"></a>
        <a data-lightbox="image-1" data-title="My caption" href="img/slides/8.jpg"
           style="top: 50%; left: 42%; width: 16%; height: 40%;"></a>
        <a data-lightbox="image-1" data-title="My caption" href="img/slides/9.jpg"
           style="top: 50%; left: 58%; width: 16%; height: 40%;"></a>
        <a data-lightbox="image-1" data-title="My caption" href="img/slides/10.jpg"
           style="top: 50%; left: 74%; width: 16%; height: 40%;"></a>
    </div>
    <img class="section-heading" src="img/headings/h_aware.png" alt="">
    <?php
    $session = json_decode(file_get_contents("sessions.txt"));

    if($session->id != -1){
        $currentSession = $session->sessions[$session->id];
    }
    if($session->nextId != -1){
        $nextSession = $session->sessions[$session->nextId];
    }


    ?>

    <?php
        if($session->id != -1){

        ?>
            <div class="row aware-row">
                <div class="col-xs-3">
                    <!--            <img src="--><?php //echo $currentSession->image ?><!--" class="img img-responsive"/>-->
                    <img id="aware-img" src="img/aware_fake.jpg" class="img img-responsive"/>
                </div>
                <div class="col-xs-9 aware-text">
                    <?php echo $currentSession->name; ?> -
                    <?php echo $currentSession->time; ?>
                </div>

            </div>
    <?php
        }
    ?>

    <?php
    if($session->id != -1){

        ?>
        <div class="row aware-row">
            <div class="col-xs-3">
                <!--            <img src="--><?php //echo $currentSession->image ?><!--" class="img img-responsive"/>-->
                <img id="aware-img" src="img/aware_fake.jpg" class="img img-responsive"/>
            </div>
            <div class="col-xs-9 aware-text">
                <?php echo $nextSession->name; ?> -
                <?php echo $nextSession->time; ?>
            </div>

        </div>
        <?php
    }
    ?>



    <!--<hr>-->

    <img class="section-heading" src="img/headings/h_stalls.png" alt="">
    <div id="gallery">

        <div class=" dynamicTile">
            <div class="row ">
                <div class="col-sm-2 col-xs-4">

                        <div id="tile1" class="tile">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="http://handsontek.net/demoimages/tiles/twitter1.png"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <img src="http://handsontek.net/demoimages/tiles/twitter2.png"
                                             class="img-responsive"/>
                                    </div>
                                </div>
                            </div>

                        </div>

                </div>
                <div class="col-sm-2 col-xs-4">

                        <div id="tile2" class="tile">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="http://handsontek.net/demoimages/tiles/hot.png"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <img src="http://handsontek.net/demoimages/tiles/hot2.png"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <img src="http://handsontek.net/demoimages/tiles/hot3.png"
                                             class="img-responsive"/>
                                    </div>
                                </div>
                            </div>

                        </div>

                </div>
                <div class="col-sm-2 col-xs-4">

                        <div id="tile3" class="tile">

                            <div class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="http://handsontek.net/demoimages/tiles/weather2.png"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <img src="http://handsontek.net/demoimages/tiles/weather.png"
                                             class="img-responsive"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="col-sm-2 col-xs-4">
                    <div id="tile4" class="tile">

                        <div class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://handsontek.net/demoimages/tiles/facebook3.png"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="http://handsontek.net/demoimages/tiles/facebook2.png"
                                         class="img-responsive"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <div id="tile5" class="tile">

                        <div class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://handsontek.net/demoimages/tiles/neews.png" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="http://handsontek.net/demoimages/tiles/neews2.png"
                                         class="img-responsive"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <div id="tile6" class="tile">

                        <div class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://handsontek.net/demoimages/tiles/skype.png" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="http://handsontek.net/demoimages/tiles/skype2.png"
                                         class="img-responsive"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 col-xs-8">
                    <div id="tile7" class="tile">

                        <div class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://handsontek.net/demoimages/tiles/gallery.png"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="http://handsontek.net/demoimages/tiles/gallery2.png"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="http://handsontek.net/demoimages/tiles/gallery3.png"
                                         class="img-responsive"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <div id="tile8" class="tile">

                        <div class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://handsontek.net/demoimages/tiles/music.png" class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="http://handsontek.net/demoimages/tiles/music2.png"
                                         class="img-responsive"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <div id="tile9" class="tile">

                        <div class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://handsontek.net/demoimages/tiles/calendar.png"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="http://handsontek.net/demoimages/tiles/calendar2.png"
                                         class="img-responsive"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4 col-xs-8">
                    <div id="tile10" class="tile">

                        <div class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <h3 class="tilecaption"><i class="fa fa-child fa-4x"></i></h3>
                                </div>
                                <div class="item">
                                    <h3 class="tilecaption">Customize your tiles</h3>
                                </div>
                                <div class="item">
                                    <h3 class="tilecaption">Text, Icons, Images</h3>
                                </div>
                                <div class="item">
                                    <h3 class="tilecaption">Combine them and create your metro style</h3>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="sp-lg"></div>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/lightbox2/dist/js/lightbox.min.js"></script>
    <script src="js/general.js"></script>

</div>
</body>
</html>

