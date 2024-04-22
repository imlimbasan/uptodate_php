<?php
$conn = mysqli_connect("localhost", "root", "PasssS2@", "up_to_date");

$id=$_REQUEST['id'];
$title= $_REQUEST["title"];
$content= $_REQUEST["content"];    

$sql="UPDATE test_blog SET title= '$title', content='$content' WHERE test_blog_id= $id;";
mysqli_query($conn, $sql);

header("Location: ../htmlPages/test1index.php?info=updated");
exit();
