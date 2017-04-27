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

<div class="container">
    <div class="row">
        <form action="fileSave.php">
            <div class="row">
                <div class="col-md-1">
                    <div class="radio">
                        <label><input type="radio" name="session[0]">Current</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="name">Image:</label>
                        <input type="text" value="image1.jpg" readonly class="form-control"  name="image[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" value="How to be safe while using internet and apps" readonly class="form-control" id="name" name="name[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" readonly class="form-control" id="description" name="description[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="time">Time:</label>
                        <input type="text" class="form-control" id="time" name="time[]">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="radio">
                        <label><input type="radio" name="session[1]">Current</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="name">Image:</label>
                        <input type="text" value="image1.jpg" readonly class="form-control"  name="image[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" value="Future of computer science (in 15, 20 years) " readonly class="form-control" id="name" name="name[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" readonly class="form-control" id="description" name="description[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="time">Time:</label>
                        <input type="text" class="form-control" id="time" name="time[]">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="radio">
                        <label><input type="radio" name="session[2]">Current</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="name">Image:</label>
                        <input type="text" value="image1.jpg" readonly class="form-control"  name="image[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" value="Fields in which computing is applied" readonly class="form-control" id="name" name="name[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" readonly class="form-control" id="description" name="description[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="time">Time:</label>
                        <input type="text" class="form-control" id="time" name="time[]">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="radio">
                        <label><input type="radio" name="session[3]">Current</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="name">Image:</label>
                        <input type="text" value="image1.jpg" readonly class="form-control"  name="image[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" value="Presentation on inspiring people in computer industry" readonly class="form-control" id="name" name="name[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" readonly class="form-control" id="description" name="description[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="time">Time:</label>
                        <input type="text" class="form-control" id="time" name="time[]">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="radio">
                        <label><input type="radio" name="session[4]">Current</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="name">Image:</label>
                        <input type="text" value="image1.jpg" readonly class="form-control"  name="image[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" value="IOT (Internet of Things)" readonly class="form-control" id="name" name="name[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" readonly class="form-control" id="description" name="description[]">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="time">Time:</label>
                        <input type="text" class="form-control" id="time" name="time[]">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>

    </div>
</div>

</body>

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/lightbox2/dist/js/lightbox.min.js"></script>
<script src="js/general.js"></script>
</html>