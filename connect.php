<?php

$con = new mysqli('localhost', 'root', 'admin', 'crud');

if (!$con) {
    die(mysqli_error($con));
}