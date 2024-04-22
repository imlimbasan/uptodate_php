<?php 
$conn = mysqli_connect("localhost", "root", "PasssS2@", "up_to_date");



$id=$_REQUEST['id'];

$sql = "SELECT *FROM test_blog WHERE test_blog_id = $id";
$query= mysqli_query($conn, $sql);


  
// if (isset($_REQUEST['update'])){
//     $id=$_REQUEST['id'];
//     $title= $_REQUEST["title"];
//     $content= $_REQUEST["content"];    

//     $sql="UPDATE test_blog SET title= '$title', content='$content' WHERE test_blog_id= $id;";
//     mysqli_query($conn, $sql);

//     header("Location: test1index.php?info=updated");
//     exit();
// }