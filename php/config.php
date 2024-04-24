<?php

$conn = mysqli_connect("localhost", "root", "", "chat");

if (!$conn) {
    echo "Errror Database connected" . mysqli_connect_error();
}