    <!DOCTYPE html>
    <html>

    <head>
        <title> Airport Database</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">Welcome</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            <a class="nav-link" href="#">Details</a>
                            <a class="nav-link" href="" data-target="#loginModal"> Login/SignUp </a>
                            <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <hr>
        <div class="text-center">
            <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
                Modal Login Form</a>
        </div>
        
        <div class="container">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Sl.No</th>
                        <th scope="col">Flight Code</th>
                        <th scope="col">Airline</th>
                        <th scope="col">Status</th>
                        <th scope="col">Terminal number</th>
                        <th scope="col">Schedule</th>
                    </tr>
                </thead>

                <tbody>
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
                </tbody>

            </table>
        </div>

    </body>

    </html>