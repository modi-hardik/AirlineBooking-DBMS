<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flying from</span>
										<input class="form-control" type="text" placeholder="City or airport">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flyning to</span>
										<input class="form-control" type="text" placeholder="City or airport">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">No. of passengers</span>
										<select class="form-control" name="npass">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
                            <?php
                    include "config.php";
                        $sql = "SELECT  a_name,  code, terminal_number, flight_status, schedule,airline_name FROM Airport, Flight,Airline
                        WHERE aid = a_id and id=airline_id and aid= '1'";
                        $result = mysqli_query($conn,$sql);
                        $i=0;
                        if($result->num_rows>0){
                            while($rows  = $result->fetch_assoc()){
                                echo"<tr>
                                <td>".++$i."</td>
                                <td>".$rows['code']."</td>
]                                <td>".$rows['airline_name']."</td>
                                <td>".$rows['flight_status']."</td>
                                <td>".$rows['terminal_number']."</td>
                                <td>".$rows['schedule']."</td>
                                </tr>";
                            }
                        }
                    ?>
							<div class="row">
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Show flights</button>
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