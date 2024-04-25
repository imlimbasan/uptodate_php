<?php
   $conn = mysqli_connect("localhost", "root", "PasssS2@", "up_to_date");

 

   $id=$_REQUEST['id'];

   $sql = "SELECT *FROM test_blog WHERE test_blog_id = $id";
   $query= mysqli_query($conn, $sql);


