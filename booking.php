    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Booking Form HTML Template</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/2.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>

    <body>
        <div id="booking" class="section">
            <div class="section-center">
                <div class="container" style="width:90%;">
                    <div class="row">
                        <div class="booking-form">
                            <form action="booking2.php" method="POST"> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label" disabled>Flying from</span>
                                            <input class="form-control" type="text" placeholder="City or airport" name="source" value="Bengaluru">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Flyning to</span>
                                            <input class="form-control" type="text" placeholder="City or airport" name="dest" value="Mumbai">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <span class="form-label">Departing</span>
                                            <input class="form-control" type="date" name = "de_date" required>
                                        </div>
                                    </div>
                                    <!-- <form action="booking.php" method="GET"> -->
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <span class="form-label">No. of passengers</span>
                                            <select class="form-control" name="npass">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <div class="row">
                                        <div class="col-md-2">
                                        <div class="form-btn" style="width:100px;">
                                            <input type="submit" class="submit-btn" value="Add Details">
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

    </html>