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
<a href="form.php">
    <div id="form-link"></div>
</a>
<img id="header-banner" src="img/exmo_header.png" alt="">
<div class="container-exmo">
    <img class="section-heading" src="img/headings/h_map.png" alt="">

    <div class="row map-container">
        <img id="map-lg" src="img/map_h.png" alt="">


        <a data-lightbox="image-1" data-title="EXMO 2017" href="img/slides/9.jpg"
           style="top: 4%; left: 2%; width: 13%; height: 23%;"></a>
        <a data-lightbox="image-1" data-title="EXMO 2017" href="img/slides/8.jpg"
           style="top: 4%; left: 20.7%; width: 8%; height: 23%;"></a>
        <a data-lightbox="image-1" data-title="EXMO 2017" href="img/slides/7.jpg"
           style="top: 4%; left: 29%; width: 7.5%; height: 23%;"></a>
        <a data-lightbox="image-1" data-title="EXMO 2017" href="img/slides/1.jpg"
           style="top: 4%; left: 37%; width: 13.5%; height: 23%;"></a>
        <a data-lightbox="image-1" data-title="EXMO 2017" href="img/slides/5.jpg"
           style="top: 4%; left: 51%; width: 13%; height: 23%;"></a>

        <a data-lightbox="image-1" data-title="EXMO 2017" href="img/slides/3.jpg"
           style="top: 4%; left: 69.5%; width: 15%; height: 23%;"></a>
        <a data-lightbox="image-1" data-title="EXMO 2017" href="img/slides/2.jpg"
           style="top: 4%; left: 85%; width: 13%; height: 23%;"></a>


        <a data-lightbox="image-1" data-title="EXMO 2017" href="img/slides/10.jpg"
           style="top: 73%; left: 2%; width: 19%; height: 23%;"></a>
        <a data-lightbox="image-1" data-title="EXMO 2017" href="img/slides/6.jpg"
           style="top: 73%; left: 52%; width: 17.5%; height: 23%;"></a>
        <a data-lightbox="image-1" data-title="EXMO 2017" href="img/slides/4.jpg"
           style="top: 73%; left: 70%; width: 14%; height: 23%;"></a>
        <a data-lightbox="image-1" data-title="EXMO 2017" href="img/slides/1.jpg"
           style="top: 73%; left: 85%; width: 13%; height: 23%;"></a>
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
                                    <img src="img/stalls/1.jpg"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="img/stalls/2.jpg"
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
                                    <img src="img/stalls/3.jpg"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="img/stalls/4.jpg"
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
                                    <img src="img/stalls/5.jpg"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="img/stalls/6.jpg"
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
                                    <img src="img/stalls/7.jpg"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="img/stalls/8.jpg"
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
                                    <img src="img/stalls/9.jpg"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="img/stalls/10.jpg"
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
                                    <img src="img/stalls/11.jpg"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="img/stalls/12.jpg"
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
                                    <img src="img/stalls/17.jpg"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="img/stalls/18.jpg"
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
                                        <img src="img/stalls/13.jpg"
                                             class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <img src="img/stalls/14.jpg"
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
                                    <img src="img/stalls/15.jpg"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="img/stalls/16.jpg"
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
                                    <img src="img/stalls/19.jpg"
                                         class="img-responsive"/>
                                </div>
                                <div class="item">
                                    <img src="img/stalls/20.jpg"
                                         class="img-responsive"/>
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

