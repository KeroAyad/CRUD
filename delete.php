<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <title>Delete</title>
</head>

<body>
    <?php
    include 'connect.php';
    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];

        $sql = "delete from `crud` where id=$id";
        $result = mysqli_query($con, $sql);
        if ($result) {
            //echo "Deleted successfull";
            echo '
        <div class=" container col-11 col-md-9 col-xl-8 my-3 alert alert-danger alert-dismissible fade show" role="alert">

        <strong>User deleted!</strong>
        <a href="display.php">Go home</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
            header("refresh:2; url=display.php");
        } else {
            die(mysqli_error($con));
        }
    } ?>

    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>