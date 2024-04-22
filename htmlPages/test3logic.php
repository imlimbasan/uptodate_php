<?php
    $conn = mysqli_connect("localhost", "root", "PasssS2@", "up_to_date");

    if (!$conn){
        echo "<h3 class=form-control bg-dark text-black my-3>Conexiunea la baza de date a eșuat: " . mysqli_connect_error() . "</h3>";
    } else {
        echo "<h3 class=form-control bg-dark text-black my-3>Conexiunea la baza de date a fost realizată cu succes!</h3>";
    }



    $sql = "SELECT * FROM test_blog";
    $query= mysqli_query($conn, $sql);


    if(isset($_REQUEST["new_post"])){
        $title= $_REQUEST["title"];
        $content= $_REQUEST["content"];    
        $sql="INSERT INTO test_blog (title, content) VALUES('$title','$content')";
        mysqli_query($conn, $sql);


        header("Location: test1index.php?info=added");
        exit();
    }


?>
