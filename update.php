<?php
    include("Connection.php");

    if(isset($_POST['submit'])){
        $id = $_GET['id']; // it's declare from database
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $query = "UPDATE cruddata SET id=$id, name='$name', mobile='$mobile', email='$email' WHERE id=$id";
        
        $data = mysqli_query($conn,$query);
        header('location:display.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap file -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--Font Awesome file-->
    <link rel="stylesheet" href="./css/all.min.css">

    <!--- CSS file --->
    <link rel="stylesheet" type="text/css" href="./css/insert.css">
    <title>Update Data</title>

</head>

<body>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow p-3 mb-5">
                    <div class="card-header">
                        <h3 class="text-center">You can update this data</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name :</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" required autofocus
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile No. :</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="mobile" required autofocus
                                        placeholder="Mobile No.">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail
                                    Address :</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" required autofocus
                                        placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a href="display.php" class="btn btn-link">
                                    You can check the your record
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery file -->
    <script src="./js/jquery.js"></script>

    <!-- Popper JS -->
    <script src="./js/popper.min.js"></script>

    <!-- Bootstrap js  flie -->
    <script src="./js/bootstrap.min.js"></script>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>