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
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <title>Show data</title>
</head>

<body>
    <div class="container">
        <div class="card shadow p-3 mb-5">
            <h5 class="card-header">Have a good day.!!</h5>
            <div class="card-body">
                <h3 class="card-title text-center">CRUD Application using PHP and MySQL</h3>

                <table class="table table-hover">
                    <div class="botton text-right">
                        <a href="insert.php">
                            <button type="button" name="btn1" class="btn btn-success">Add More</button>
                        </a>
                    </div><br />
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">MOBILE NO.</th>
                            <th scope="col">E-MAIL ID</th>
                            <th class="text-center" colspan="3">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                include("Connection.php");

                                    $query = " SELECT * From cruddata";
                                    
                                    $data = mysqli_query($conn,$query);

                                    while($result = mysqli_fetch_array($data)){

    
                            ?>
                        <tr>
                            <th scope="row"><?php echo $result['id']; ?></th>
                            <td> <?php echo $result['name']; ?> </td>
                            <td> <?php echo $result['mobile']; ?> </td>
                            <td> <?php echo $result['email']; ?> </td>
                            <td class="text-center">
                                <a href="update.php?id=<?php echo $result['id']; ?>">
                                    <button type="button" name="btn2" class="btn badge-pill btn-primary">Edit</button>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="delete.php?id=<?php echo $result['id']; ?>">
                                    <button type="button" name="btn3" class="btn badge-pill btn-danger">Remove</button>
                                </a>
                            <td>
                        </tr>
                        <?php
                                    }
                        ?>

                    </tbody>
                </table>
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