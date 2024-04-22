<?php 
include "test3logic.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>
<body>
    

<div class="container mt-5">

<?php if(isset($_REQUEST['info'])): ?>
    <?php if($_REQUEST['info'] == 'added'): ?>
        <div class="alert alert-success" role="alert">
            Post has been added successfully
        </div>
    <?php elseif($_REQUEST['info'] == 'updated'): ?>
        <div class="alert alert-success" role="alert">
            Post has been updated successfully
        </div>
    <?php elseif($_REQUEST['info'] == 'deleted'): ?>
        <div class="alert alert-success" role="alert">
            Post has been deleted successfully
        </div>
    <?php endif; ?>
<?php endif; ?>


<h1 class="d-flex justify-content-center align-items-center"> Manage Posts</h1>
<br>


        <div class="text-center">
            <a href="test2create.php" class="btn btn-outline-dark">New Post</a>
            <a href="index_blog.php" class="btn btn-outline-dark">Back to blogs</a>
            
        </div>            
        
        
                <div class="container mt-5">
            <div class="row">
                <?php foreach ($query as $q): ?>
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $q['title']; ?></h5>
                                <p class="card-text"><?php echo $q['content']; ?></p>
                                <a href="testview.php?id=<?php echo $q['test_blog_id'];?>" class="btn btn-light">Read More<span class="text-danger">&rarr;</span></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        </div>







</body>
</html>