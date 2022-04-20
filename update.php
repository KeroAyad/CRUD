<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($con, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
}
if (isset($_POST['submit'])) {
    $name = (!empty($_POST['name'])) ? $_POST['name'] : $row['name'];
    $email = (!empty($_POST['email'])) ? $_POST['email'] : $row['email'];
    $mobile = (!empty($_POST['mobile'])) ? $_POST['mobile'] : $row['mobile'];
    $password = (!empty($_POST['password'])) ? $_POST['password'] : $row['password'];

    $sql = "update `crud` set name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Data updated successfully";
        // header('location:display.php');
        echo '
        <div class=" container col-11 col-md-9 col-xl-8 my-3 alert alert-success alert-dismissible fade show" role="alert">

        <strong>Holy guacamole!</strong> Data updated successfully.
        <a href="display.php">Go home</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <title>Home</title>
</head>

<body>

    <div class="container col-11 col-md-9 col-xl-8 my-5 p-3 border rounded-3 shadow ">
        <h3>Update</h3>
        <hr>
        <form method="post">
            <div class="mb-3"><label class="form-label" for="">Name</label><input type="text" name="name" autocomplete="off" class="form-control" placeholder="<?= $name ?>"></div>
            <div class="mb-3"><label class="form-label" for="">Email</label><input type="text" name="email" autocomplete="off" class="form-control" placeholder="<?= $email ?>"></div>
            <div class="mb-3"><label class="form-label" for="">Mobile</label><input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="<?= $mobile ?>"></div>
            <div class="mb-3"><label class="form-label" for="">Password</label><input type="text" name="password" autocomplete="off" class="form-control" placeholder="<?= $password ?>"></div>
            <button class="btn btn-secondary" type="submit" name="submit">Update</button>
        </form>
    </div>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>