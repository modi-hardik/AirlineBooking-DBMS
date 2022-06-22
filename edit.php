<?php
                                    include "../config.php";

                        $fc = $_POST['fcode'];
                        $cdt = $_POST['changedatetime'];
                        $cs = $_POST['changestatus'];
                        $cdt = Date($cdt);
                        // echo $fc;
                    $sql = "UPDATE Flight SET Flight_Status = '$cs', Schedule = '$cdt' where code='$fc'";
                    $result = mysqli_query($conn,$sql);
                    // $result1 = mysqli_query($conn,$sql1);
                    if($result){
                        // mysqli_close($database); 
     header("location:modify.php"); // redirects to all records page
    exit;
                    }else{
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                ?>