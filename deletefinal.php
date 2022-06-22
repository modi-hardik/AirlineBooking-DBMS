<?php
                                    include "../config.php";

                        $id = $_GET['id'];
                    // $sql = "DELETE from Routes where F_code='$id'";
                    $sql = "DELETE from Flights where code = '$id'";
                    $result = mysqli_query($conn,$sql);
                    // $result1 = mysqli_query($conn,$sql1);
                    if($result){
                       
     header("location:modify.php"); // redirects to all records page
    exit;
                    }else{
                        echo "Some error";
                    }
                ?>