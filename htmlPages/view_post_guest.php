<?php 
include "../includes/single_post.php";
include "../includes/update_post.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="createblog.html">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="index_blog.php">UpToDate</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">   
      <a class="btn btn-sm btn-outline-dark mx-2 " href="index_blog.php">Back to blog</a>
      
      <?php
            if(isset($_SESSION["username"])){
                echo '<a class="btn btn-sm btn-outline-dark mx-2" href="test1index.php">Create Post</a>';
            }else{
                echo '<a class="btn btn-sm btn-outline-dark mx-2 " href="./login.php">Create Post</a>';
            };
        ?> 

            <?php
            if(isset($_SESSION["username"])){
                echo '<a class="btn btn-sm btn-outline-secondary mx-2" href="../includes/logout.php">LOG OUT</a>';
            }else{
                echo '<a class="btn btn-sm btn-outline-secondary mx-2" href="./login.php">LOG IN</a>';
            };
        ?>
      </div>
    </div>
  </header>

  <div class="nav-scroller  border-bottom">   
  </div>
</div>




<div class="container mt-5">

        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center overflow-auto">
                <h1>
                    <?php echo $q['title']?>
                </h1>
                <p class="mt-5 border-left border-dark pl-3 overflow-auto"><?php echo $q['content']?></p>
            </div>           

        <?php }?>






</div>



</body>
</html>