<!DOCTYPE html>
<html>
    <head>
        <title>View tickets</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="viewtickets.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <br>
        <br>
        <h1 style="margin-left:10%;">Details</h1>
        <?php
                    include "config.php";
                        $sql = "SELECT fname, lname,Schedule,Source,Destination,Seat_no FROM Passenger, Ticket,Flight WHERE p_no = passport_number and Flight_code=code and Ticket_no = '1';";
                        $result = mysqli_query($conn,$sql);
                        $i=0;
                        if($result->num_rows>0){
                            while($rows  = $result->fetch_assoc()){
                                echo"<section class='container'>
            
                                <div class='row'>
                                  <article class='card fl-left'>
                                    <section class='date'>
                                      ".$rows['Seat_no']."
                                    </section>
                                    <section class='card-cont'>
                                      <h2>".$rows['fname']." ".$rows['lname']."</h2>
                                      <div class='even-date'>
                                       <i class='fa fa-calendar'></i>
                                       <time>
                                         <span>".$rows['Schedule']."</span>
                                       </time>
                                      </div>
                                      <div class='even-info'>
                                        <i class='fa fa-map-marker'></i>
                                        <p>
                                          ".$rows['Source']."-".$rows['Destination']."
                                        </p>
                                      </div>
                                      <a href='#'>booked</a>
                                    </section>
                                  </article>
                                  <br>
                                  
                                </div>
                          </section>";
                            }
                        }
                    ?>
        
        
    </body>
</html>