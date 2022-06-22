<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <title>Dashboard</title>
</head>

<body>
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->

    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Dashboard</a>
            </div>
        </nav>
    </div>

            
                <?php
                include "../config.php";
                $id = $_GET['id'];
                    echo "Do You Want To Remove This Flight: ".$_GET['id']."   ???";
                    ?>
                                                        <button type='submit' name='delete' style='background-color:green; color:white;text-decoration:none'><a style="text-decoration:none;color:white;" href="modify.php">No</a></button>

                                    <button type='submit' name='delete' style='background-color:red; color:white;text-decoration:none'><a style="text-decoration:none;color:white;" href="deletefinal.php?id=<?php echo $id; ?>">Delete</a></button>
                    
                   
                
    

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>

</html>


 <!-- <input type='hidden' name='fcode1' value= '".htmlentities($rows['code'])> -->



