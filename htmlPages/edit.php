<?php 
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
</head>
<body>
    

<div class="container mt-5">

<?php foreach ($query as $q) {?>
    <form action="../includes/updatePostClick.php" method="GET">
            <input type="text" hidden name="id" value="<?php echo $q['test_blog_id'] ?>"></input>
            <input type="text" name="title" placeholder="Blog Title" class="form-control bg-dark text-white my-3 text-center" value="<?php echo $q['title'] ?>">
            <textarea name="content" class="form-control bg-dark text-white my-3"><?php echo $q['content'] ?></textarea> 
            <button name="update" class="btn btn-dark">Update</button>
    </form>
<?php }?>

   
</div>

</body>
</html>