<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Data inserted successfully";
        header('location:display.php');
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
        <form method="post">
            <div class="mb-3"><label class="form-label" for="">Name</label><input type="text" name="name" autocomplete="off" class="form-control"></div>
            <div class="mb-3"><label class="form-label" for="">Email</label><input type="text" name="email" autocomplete="off" class="form-control"></div>
            <div class="mb-3"><label class="form-label" for="">Mobile</label><input type="text" name="mobile" autocomplete="off" class="form-control"></div>
            <div class="mb-3"><label class="form-label" for="">Password</label><input type="text" name="password" autocomplete="off" class="form-control"></div>
            <button class="btn btn-secondary" type="submit" name="submit">Submit</button>
        </form>
    </div>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>