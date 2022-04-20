<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <title>List</title>
</head>

<body>

    <div class="container my-3 px-0" id="form">
        <div class="d-flex flex-row-reverse">
            <a href="index.php" class="btn btn-secondary text-end">Add user</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php
                include 'connect.php';
                $sql = "select * from `crud`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo "
                                <tr>
                                    <th> {$id}</th>
                                    <td>{$name}</td>
                                    <td> {$email}</td>
                                    <td>{$mobile}</td>
                                    <td>{$password}</td>" . '
                                    <td><a href="update.php?updateid=' . $id . '" class="btn btn-secondary btn-sm my-1 my-lg-0" style="margin-left: 0.16rem">Update</a>
                                        <a href="delete.php?deleteid=' . $id . '" class="btn btn-danger btn-sm my-1 my-sm-0 " style="margin-left: 0.32rem" id=".alert">Delete</a>
                                    </td>
                                </tr>';
                    }
                }
                ?>
            </tbody>



        </table>
    </div>

    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>