<?php
    include("Connection.php");

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $query = "INSERT INTO `cruddata`(`name`, `mobile`, `email`) VALUES ('$name','$mobile','$email')";
        
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "";
        }
        else{
            die("ERROR: COULD NOT CONNECT" .mysqli_connect_error());
        }
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
    <title>Insert Data</title>

</head>

<body>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow p-3 mb-5">
                    <div class="card-header">
                        <h3 class="text-center">Insert the data</h3>
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
                                    <input type="email" id="emailvarification" class="form-control" name="email"
                                        placeholder="example@gmail.com" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a href="display.php" class="btn btn-link">
                                    You can check the data
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Email varification -->
    <!--    <script type="text.javascript">
        var emailcheck = document.getElementById('emailvarification').value;
        var pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        function myfun(){
            if(pattern.test(emailcheck)){
                document.getElementById('showmsg').innerHTML = "";
            }
            else{
                document.getElementById('showmsg').innerHTML = "Sorry Your e-mail is not correct";
            }
        }

    </script>
-->

    <!-- Jquery file -->
    <script src="./js/jquery.js"></script>

    <!-- Popper JS -->
    <script src="./js/popper.min.js"></script>

    <!-- Bootstrap js  flie -->
    <script src="./js/bootstrap.min.js"></script>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>