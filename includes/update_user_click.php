<?php
session_start();


if (isset($_POST['update'])) {
    $conn = mysqli_connect("localhost", "root", "PasssS2@", "up_to_date");
    $username = $_SESSION['username'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $newsletter = isset($_POST['newsletter']) ? 1 : 0; 


    $update_sql = "UPDATE users SET lname = '$lname', fname = '$fname', email = '$email', newsletter = '$newsletter' WHERE username = '$username'";
    $update_result = mysqli_query($conn, $update_sql);

    header("Location: ../htmlPages/my_account.php?info=updated");
    exit();
} else {

    echo "Butonul de actualizare nu a fost apăsat.";
}
?>
