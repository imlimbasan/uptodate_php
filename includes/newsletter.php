<?php
session_start();


        $conn = mysqli_connect("localhost", "root", "PasssS2@", "up_to_date");

        $email = $_POST['email'];

        $update_sql = "INSERT INTO newsletter (email) VALUES ('{$email}')";
        $update_result = mysqli_query($conn, $update_sql);
        exit();
?>
