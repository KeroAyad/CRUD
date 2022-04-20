<?php

$con = new mysqli('localhost', 'root', '12345678', 'crud');

if (!$con) {
    die(mysqli_error($con));
}
