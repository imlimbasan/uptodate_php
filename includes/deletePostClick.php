<?php
$conn = mysqli_connect("localhost", "root", "PasssS2@", "up_to_date");
$id=$_REQUEST['id'];


$sql="DELETE FROM test_blog WHERE test_blog_id= $id;";
mysqli_query($conn, $sql);

header("Location: ../htmlPages/test1index.php?info=delete");
exit();
