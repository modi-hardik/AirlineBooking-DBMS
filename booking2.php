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

    <div class="container">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Sl.No</th>
                        <th scope="col">Flight Code</th>
                        <th scope="col">Schedule</th>
                        <th scope="col">Select</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include "config.php";
                    $_source = $_POST['source'];
                                $_dest = $_POST['dest'];
                                $_ddate = $_POST['de_date'];
                    $sql = "SELECT  code,schedule from Flight,Routes where code = f_code and source='$_source' and dest = '$_dest'";
                    $result = mysqli_query($conn,$sql);
                    $k=0;
                    if($result->num_rows>0){
                        while($rows  = $result->fetch_assoc()){
                            echo"<tr>
                            <td>".++$k."</td>
                            <td>".$rows['code']."</td>
]                                <td>".$rows['schedule']."</td>
                            </tr>";
                        }
                    }
                    ?>
                </tbody>

            </table>
        </div>

        <div id="booking" class="section">
            <div class="section-center">
                <div class="container" style="width:90%;">
                    <div class="row">
                        <div class="booking-form">
                            <form action="confirmation.php" method="POST"> 
                                <?php
                                // $b = $_['source'];
                                // echo $b;
                                
                            $i=(int)$_POST['npass'];
                            
                            $j = 0;
                                while($j < $i){
                                    echo"<div class='row'>
                                    <div class='col-md-2'>
                                        <div class='form-group'>
                                            <span class='form-label'>First Name</span>
                                            <input class='form-control' type='text' placeholder='Fname' name='fname_$j'>
                                        </div>
                                    </div>
                                    <div class='col-md-2'>
                                        <div class='form-group'>
                                            <span class='form-label'>Last Name</span>
                                            <input class='form-control' type='text' placeholder='Lname' name='lname_$j'>
                                        </div>
                                    </div>
                                    <div class='col-md-2'>
                                        <div class='form-group'>
                                            <span class='form-label'>Passport Number</span>
                                            <input class='form-control' type='text' placeholder='Passport Number' name='passno_$j'>
                                        </div>
                                    </div>
                                    <div class='col-md-2'>
                                        <div class='form-group'>
                                            <span class='form-label'>B Date</span>
                                            <input class='form-control' type='date' name='b_date_$j'>
                                        </div>
                                    </div>
                                    <div class='col-md-2'>
                                        <div class='form-group'>
                                            <span class='form-label'>Gender</span>
                                            <input class='form-control' type='text' placeholder='Gender' name='gen_$j'>
                                        </div>
                                    </div>
                                </div>";
                                    ++$j;
                                }
                                
                               
                                
                            
                        ?>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-btn">
                                            <input type="submit" class="submit-btn">Show flights</input>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

    </html>
    
  