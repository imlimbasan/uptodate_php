<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "PasssS2@", "up_to_date");


$sql_count = "SELECT COUNT(*) AS total_inregistrari FROM test_blog";
$query_count = mysqli_query($conn, $sql_count);
    $row_count = mysqli_fetch_assoc($query_count);
    $total_inregistrari = $row_count['total_inregistrari'];


$sql_count = "SELECT COUNT(*) AS total_useri FROM users";
$query_users = mysqli_query($conn, $sql_count);
    $user_count = mysqli_fetch_assoc($query_users);
    $total_useri = $user_count['total_useri'];



$sql = "SELECT * FROM test_blog WHERE test_blog_id IN (16, 18, 19, 20, 21, 22, 24, 25, 26)";
$query = mysqli_query($conn, $sql);
$posts = array();

while ($row = mysqli_fetch_assoc($query)) {
    array_push($posts, $row);
}

mysqli_close($conn);

define('__DEBUG__', true);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../cssPages/index.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/footer.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/body.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/slider.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/navbar.css">
    <!-- <link rel="stylesheet" href="../cssPages/blog.css">  -->
    <link rel="stylesheet" href="../cssPages/categories.css">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/f/css/lightbox.css?<?=__DEBUG__?time():''?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">



<!-- bootstrap 4.4 -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->




<!-- favicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<link rel="stylesheet" href="../cssPages/blog.css">

  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>
 
     
    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
    <circle cx="12" cy="12" r="10"/>
    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
  </symbol>
  <symbol id="cart" viewBox="0 0 16 16">
    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
</svg>




<header>
     <div class="nav-bg fixed-top ">
   <div class="nav-bg container">



<div class="bg-nav">
<div class="content d-flex justify-content-center align-items-center">
<div class="welcome"> 
  <header class=" lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary text-white" href="index.php">About Us</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="index_blog.php">UpToDate</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">   
      <?php
            if(isset($_SESSION["username"])){
                echo '<a class="btn btn-sm btn-outline-dark mx-2" href="test1index.php">Create Post</a>';
            }else{
                echo '<a class="btn btn-sm btn-outline-dark mx-2 " href="./login.php">Create Post</a>';
            };
        ?> 

          <a class="btn btn-sm mx-2" href="./contact.php">Contact</a>
     

<?php
            if(isset($_SESSION["username"])){
                echo '<a class="btn btn-sm  mx-2" href="../htmlPages/my_account.php">My account</a>';
            }else{
                echo '<a class="d-none" href="./my_account.php"></a>';
            };
        ?>

            <?php
            if(isset($_SESSION["username"])){
                echo '<a class="btn btn-sm  mx-2" href="../includes/logout.php">LOG OUT</a>';
            }else{
                echo '<a class="btn btn-sm  mx-2" href="./login.php">LOG IN</a>';
            };
        ?>
      </div>
    </div>
  </header>
</div>
</div>
</div>

</div>
</header>


<div class="bg-welcome">
        <div class="content d-flex justify-content-center align-items-center">
        <div class="welcome">   
          <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">  
            <div class="col-lg-6 px-0">
              <h1 class="display-4 fst-italic"><?php echo $posts[0]['title']; ?></h1>
              <p class="lead my-3"><?php echo $posts[0]['content']; ?></p>
        
              <!-- <p class="lead mb-0"><a href="view_post_guest.php?id=<?php echo $posts[0]['test_blog_id'];?>" class="text-body-emphasis fw-bold">Continue reading...</a></p> -->
        
              
              <?php
                    if(isset($_SESSION["username"])){
                        echo '<p class="lead mb-0"><a class="text-body-emphasis fw-bold" href="testview.php?id=' . $posts[0]['test_blog_id'] . '">Continue reading...</a></p>';
                    }else{
                        echo '<p class="lead mb-0"><a class="text-body-emphasis fw-bold" href="view_post_guest.php?id=' . $posts[0]['test_blog_id'] . '">Continue reading...</a></p>';
                    };
                ?>
        
            </div>
          </div>
        
        
          <div class="row mb-2 ">
            <div class="col-md-6 ">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg_card">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary-emphasis">Music</strong>
                  <h3 class="mb-0"><?php echo $posts[1]['title'];?></h3>
                  <div class="mb-1 text-body-secondary">Nov 12</div>
                  <p class="card-text mb-auto"><?php echo $posts[1]['content'];?></p>  
                 
                 
                  <!-- <a href="testview.php?id=<?php echo $posts[1]['test_blog_id'];?>" class="icon-link gap-1 icon-link-hover stretched-link">Continue reading<svg class="bi"><use xlink:href="#chevron-right"/></svg> -->
                 
                  <?php
                    if(isset($_SESSION["username"])){
                        echo '<a class="icon-link gap-1 icon-link-hover stretched-link" href="testview.php?id=' . $posts[1]['test_blog_id'] . '">Continue reading<svg class="bi"><use xlink:href="#chevron-right"/></svg>';
                    }else{
                        echo '<a class="icon-link gap-1 icon-link-hover stretched-link" href="view_post_guest.php?id=' . $posts[1]['test_blog_id'] . '">Continue reading<svg class="bi"><use xlink:href="#chevron-right"/></svg>';
                    };
                ?>
                
                
                </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="../images/Midas.png" class="bd-placeholder-img" width="200" height="250" alt="Descrierea imaginii">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg_card">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success-emphasis">DE-FI</strong>
                  <h3 class="mb-0"><?php echo $posts[3]['title']?></h3>
                  <div class="mb-1 text-body-secondary">Nov 11</div>
                  <p class="mb-auto"><?php echo $posts[3]['content']?></p>
                  <?php
                    if(isset($_SESSION["username"])){
                        echo '<a class="icon-link gap-1 icon-link-hover stretched-link" href="testview.php?id=' . $posts[3]['test_blog_id'] . '">Continue reading<svg class="bi"><use xlink:href="#chevron-right"/></svg>';
                    }else{
                        echo '<a class="icon-link gap-1 icon-link-hover stretched-link" href="view_post_guest.php?id=' . $posts[3]['test_blog_id'] . '">Continue reading<svg class="bi"><use xlink:href="#chevron-right"/></svg>';
                    };
                ?>
                  </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                <img src="../images/Bhero.png" class="bd-placeholder-img" width="200" height="250" alt="Descrierea imaginii">
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
 </div>






<!-- SECTIUNE DE CATEGORII!!!!!!!!!!! -->

        <!-- <section>
        <div class="container">
            <div class="text-center margin-40px-bottom">
                <h3 class="no-margin-bottom">Categories</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 sm-margin-30px-bottom">
                    <div class="mh-100">
                        <a href="#" class="card bg-img box-hover cover-background h-100 border-0 p-4 dtext-decoration-none " style="background-image: url(../images/categoriesfirst.png);">
                            <div class="mt-auto position-relative z-index-9">
                                <h5 class="text-white ">DE-FI</h5>
                                <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row margin-30px-bottom">
                        <div class="col-md-4 xs-margin-30px-bottom">
                            <a href="" class="card bg-img box-hover cover-background border-0 p-4 text-decoration-none" data-background="img/content/02.jpg" style="background-image: url(../images/categories1.png);">
                                <div class="mt-auto position-relative z-index-9">
                                    <h5 class="text-white">RWA</h5>
                                    <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 xs-margin-30px-bottom">
                            <a href="#" class="card bg-img box-hover cover-background border-0 p-4 text-decoration-none" data-background="img/content/03.jpg" style="background-image: url(../images/categories2.png);">
                                <div class="mt-auto position-relative z-index-9">
                                    <h5 class="text-white">Gaming</h5>
                                    <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="card bg-img box-hover cover-background border-0 p-4 text-decoration-none" data-background="img/content/04.jpg" style="background-image: url(../images/categories3.png);">
                                <div class="mt-auto position-relative z-index-9">
                                    <h5 class="text-white">NFTs</h5>
                                    <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 xs-margin-30px-bottom">
                            <a href="#" class="card bg-img box-hover cover-background border-0 p-4 text-decoration-none" data-background="img/content/05.jpg" style="background-image: url(../images/categories6.png);">
                                <div class="mt-auto position-relative z-index-9">
                                    <h5 class="text-white">Owr picks &amp; Projects</h5>
                                    <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-5">
                            <a href="#" class="card bg-img box-hover cover-background border-0 p-4 text-decoration-none" data-background="img/content/06.jpg" style="background-image: url(../images/categories5.png);">
                                <div class="mt-auto position-relative z-index-9">
                                    <h5 class="text-white">Regulation</h5>
                                    <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section> -->


<!-- CARDS -->
<section class="cards_backgrounds">
	<div class="container py-4">

		<article class="postcard dark blue">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="../images/2.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="#">Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>5 min reading</li>
					<li class="tag__item play blue">
						<a href="#"><i class="fas fa-play mr-2"></i>Read More</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark red">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="../images/3.jpg" alt="Image Title" />	
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="#">Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>5 min reading.</li>
					<li class="tag__item play red">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark green">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="../images/4.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="#">Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>5 min reading.</li>
					<li class="tag__item play green">
						<a href="#"><i class="fas fa-play mr-2"></i>Read More</a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="../images/5.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="#">Title</a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">
						<i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>5 min reading.</li>
					<li class="tag__item play yellow">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li>
				</ul>
			</div>
		</article>

    
	</div>
</section>





<br>
<br>
<main class="container">   
  <div class="row g-5">
    <div class="col-md-8">


      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">Revolutionizing Crypto News: Introducing Uptodate</h2>
        <p class="blog-post-meta">Apr 21, 2024 by <a href="https://twitter.com/MAIAdviserX">XAdvise</a></p>

        <p>We are thrilled to introduce you to Uptodate - the decentralized crypto blog aggregator that puts the power back in your hands.</p>
        <hr>
        <h2>The Need for Uptodate:</h2>
        <blockquote class="blockquote">
        </blockquote>
        <p>The crypto space is brimming with innovation and activity, presenting a constant stream of new projects, trends, and insights. Yet, within this vast sea of information, it's all too easy to feel overwhelmed and adrift. Traditional news outlets often fall short in providing comprehensive coverage, and centralized platforms may suffer from bias or censorship. This is precisely where Uptodate steps in. By harnessing the power of decentralization and community-driven curation, Uptodate aims to be the go-to destination for all your crypto news needs.</p>
        
        <p>At its core, Uptodate operates as a platform by the community, for the community. Leveraging blockchain technology, we ensure transparency, immutability, and trustworthiness in the content we deliver. Our decentralized model empowers users to contribute, curate, and consume content without the interference of intermediaries. Every blog post published on Uptodate is authenticated with a crypto wallet transaction, ensuring its integrity and authenticity.</p>

    <br>        
        <h2>What Sets Uptodate Apart:</h2>
        <ul>
          <li>Unwavering commitment to decentralization.</li>
          <li>Emphasis on transparency.</li>
          <li>Focus on delivering quality content.</li>
          <li>Empowering users to curate content.</li>
          <li>Rewarding valuable contributions.</li>
          <li>Fostering a dynamic ecosystem.</li>
  
          <li><ins>Navigate the ever-evolving crypto landscape with confidence and clarity.</ins> </li>
        </ul>
        <h2>Conclusion:</h2>
        <p>In a world inundated with information, Uptodate emerges as a beacon of reliability, transparency, and decentralization. Join us as we redefine how we stay informed in the fast-paced realm of crypto. Together, let's forge a future where knowledge is accessible to all, and information is truly decentralized.</p>
       
      
      </article>
       
<hr>
<br>
<br>
        </main>


<div class="container">
    <div class="row ">
        <!-- <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">New Orders</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                3,243
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>12.5% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Users</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                            <?php echo $total_useri; ?>
                            </h2>
                        </div>
                        <div class="col-4 text-end">
                            <span><i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-green-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Total Blogs</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                            <?php echo $total_inregistrari; ?>
                            </h2>                            
                        </div>
                        <div class="col-4 text-end">
                            <span><i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

  



        <!-- <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Revenue Today</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $11.61k
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>2.5% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>

<div class="cards_backgrounds">
<main class="container">   
<!--                  -->
<br> <br> 

      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">EGLD STAKING V4 IT'S COMING SOON!</h2>
        <p class="blog-post-meta"> Mar 23, 2024 by <a href="#">MEXTO1</a></p>

        <p>Great strides have been made in the staking and delegation system, and these improvements will bring significant benefits to every user.</p>
        <blockquote>
          <p><strong>Before the update, the system had some limitations and was not functioning at its maximum capacity. The waiting list was a hurdle, and some nodes did not contribute to the network's security as ideally as they should have.</strong></p>
        </blockquote>
        <p>But now, the waiting list has been completely eliminated. Instead, a bidding system has been introduced, which selects the best validators for the network. This means that our network becomes more open, democratic, and robust than ever before.</p>
        <p>But what does this mean for you as a user? Well, here are some of the major advantages you will experience: Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nam error nostrum harum consequatur perferendis deserunt eligendi facere, doloribus ratione minus ipsum consectetur quibusdam nesciunt explicabo accusantium dicta, illo atque nobis in optio officiis at dolore nulla? Quisquam distinctio quam culpa earum numquam, ex, et rerum ratione maxime molestiae nihil ab at labore illum iusto eius delectus similique a, obcaecati placeat. Omnis ratione ipsam officia quasi ex, animi fugit ducimus ipsa corrupti quos commodi excepturi, quia rerum voluptate quae. Eveniet iusto, libero quam quia consequatur, provident culpa qui laboriosam sunt maiores commodi aliquam minus, excepturi id soluta totam adipisci architecto aut voluptate consequuntur ab. Quis atque aperiam earum dicta, suscipit maiores et voluptatibus provident similique incidunt nam dolorem officiis quo deserunt laborum nemo reprehenderit veniam. Aut officiis ipsum dignissimos delectus consectetur labore maiores reiciendis itaque, dicta harum consequuntur a! Voluptas id laudantium, unde nobis vero voluptatem excepturi aperiam, magnam deserunt in quod quis? Officiis ullam suscipit nulla dolor doloremque quas, sapiente voluptates earum exercitationem et tenetur, ipsa incidunt adipisci repellendus facilis? Ab aliquid assumenda sit minus eligendi dolore accusamus! Impedit possimus maxime delectus nulla? Eum perspiciatis itaque quasi tempora nam cum eaque maxime, adipisci cupiditate ullam ea repellat saepe officia eligendi similique voluptatibus excepturi nemo numquam fugit! Totam ipsa provident repudiandae pariatur veniam ratione vel ut, voluptates asperiores consequuntur minus sit, sunt quam nemo ea corporis omnis. Doloribus labore aspernatur eligendi accusantium temporibus deserunt maxime laboriosam accusamus, sit molestiae veritatis incidunt, saepe reiciendis nisi cupiditate rem nemo a facilis? Veniam a impedit quia officia nam, accusantium ipsum incidunt perferendis quaerat aliquam quo similique quibusdam tempora vero cumque consequatur, error ratione at culpa voluptas aliquid vel voluptatem atque ipsam. Doloribus omnis, architecto sint debitis, eligendi dolore possimus at libero ullam tempora labore sunt excepturi unde repellendus odit placeat et magnam recusandae dignissimos expedita. Ipsa ullam est mollitia blanditiis facilis dicta repellat? Temporibus, blanditiis quis error, ea veniam suscipit quaerat a architecto ipsum perspiciatis mollitia cumque eum cupiditate! Quod hic sit fugiat cumque quaerat, quisquam quia doloribus optio, magni voluptatum rem dolore facere aliquid. At, iure laudantium aspernatur ex repudiandae suscipit amet soluta nam cumque illum maxime provident voluptate pariatur obcaecati doloremque. Numquam, reprehenderit ea nihil assumenda quo blanditiis sapiente, natus iure ducimus aliquid nostrum eius vitae voluptatem repudiandae necessitatibus reiciendis aperiam? Repellat, veniam, blanditiis quia ducimus a quasi perferendis corrupti voluptates vero quo pariatur minima, exercitationem necessitatibus suscipit inventore sint? Eaque, rem excepturi, voluptates tempora doloribus quo eius maiores beatae officiis reprehenderit temporibus aliquam iste officia reiciendis nemo dicta dignissimos commodi. Enim, quia asperiores necessitatibus nihil officia laborum accusantium commodi impedit minima quasi aut quidem soluta consequuntur aperiam dolorem! Expedita placeat ad, minima tempore at cumque itaque reprehenderit illo recusandae deleniti. Quod quis eaque aliquam voluptatibus sapiente mollitia distinctio tempora, natus unde impedit quidem eum? Quas dolore provident ad adipisci doloribus deserunt quos, at enim quidem, consequuntur quae rem, dolorem aspernatur. Facere, eius quo! Vel non recusandae, quisquam quae repellendus modi, illum sit vitae reiciendis enim, architecto necessitatibus neque? Ratione, beatae!</p>
       
       
        <!-- <table class="table">

          <tbody>
            <tr>
              <td><dt>Enhanced Stability and Security:</dt></td>
              <td>With more high-quality validators participating in the network, our transactions will be faster and more reliable. The removal of inefficient nodes and the introduction of a bidding-based selection system ensure a more stable and secure network.</td>
            </tr>
            <tr>
              <td><dt>Improved Efficiency:</dt></td>
              <td>Nodes are now dynamically chosen based on their top-up value and a ranking mechanism, optimizing the transaction validation process.</td>
            </tr>
            <tr>
              <td><dt>Potential for Higher Rewards:</dt></td>
              <td>By participating in staking and delegation within a more robust and efficient network with high-quality validators, there is increased security for the network and, consequently, more attractive rewards for participants.</td>
            </tr>
          </tbody>
        </table> -->

        <p>Great strides have been made in the staking and delegation system, and these improvements will bring significant benefits to every user.</p>
      </article>

   
      <br>
      </div>
      <br>


      <div class="content d-flex justify-content-center align-items-center">
<div class="welcome">
      <article class="blog-post">
<h2 class="display-5 link-body-emphasis mb-1 row flex-nowrap justify-content-center align-items-center">Upcoming:</h2>        
<br>





      <!--               -->



<div class="container-fluid py-5">

<div class="row">
  <div class="col-lg-12">

    <div class="horizontal-timeline">

      <ul class="list-inline items">
        <li class="list-inline-item items-list">
          <div class="px-4">
            <div class="event-date badge bg-info">Q2 2024</div>
            <h5 class="pt-2">Connecting with MultiversX API:</h5>
            <p class="text-muted">Owith unparalleled access to the latest trends, analyses, and developments in the crypto space.</p>
          </div>
        </li>
        
        <li class="list-inline-item items-list">
          <div class="px-4">
            <div class="event-date badge bg-success">Q2 2024</div>
            <h5 class="pt-2">Proof of Identity on the Blockchain:</h5>
            <p class="text-muted">With this feature, users can verify their identity securely and transparently, ensuring that the content they create and consume on Uptodate is authentic and reliable.
            </p>            
          </div>
        </li>         
                
        <li class="list-inline-item items-list">
          <div class="px-4">
            <div class="event-date badge bg-warning">Q4 2024</div>
            <h5 class="pt-2">Launch MVP</h5>
            <p class="text-muted">Operate without a central authority, giving all participants an equal say in decision-making processes.
            </p>
            
            <li class="list-inline-item items-list">
          <div class="px-4">
            <div class="event-date badge bg-danger">Q3 2024</div>
            <h5 class="pt-2">Delving into Blockchain Basics:</h5>
            <p class="text-muted">Each transaction is securely encrypted and linked to the previous one, forming a chain of blocks that are immutable and tamper-proof. </p>
            </li>               
                    </div>
                </div>              
              </ul>
            </div>  
        </div>
    </div>
</article>
    </div>
      </div>

    <!-- <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Decentralized Autonomous Organizations "DAOs" operate without a central authority, giving all participants an equal say in decision-making processes.</p>
        </div>

        <div>
          <h4 class="fst-italic">Recent posts</h4>
          <ul class="list-unstyled">


     
                <?php
                        if(isset($posts[2]['title'])) {
                            echo '<li>';
                            echo '<a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="testview.php?id=' . $posts[2]['test_blog_id'] . '">';
                            echo '<img src="../images/1.png" class="bd-placeholder-img" width="100%" height="110" alt="Descrierea imaginii">';
                            echo '<div class="col-lg-8">';
                            echo '<h6 class="mb-0">' . $posts[2]['title'] . '</h6>';
                            echo '<small class="text-body-secondary">January 15, 2024</small>';
                            echo '</div>';
                            echo '</a>';
                            echo '</li>';
                        }
                    ?>


         <?php
                        if(isset($posts[1]['title'])) {
                            echo '<li>';
                            echo '<a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="testview.php?id=' . $posts[1]['test_blog_id'] . '">';
                            echo '<img src="../images/2.png" class="bd-placeholder-img" width="100%" height="110" alt="Descrierea imaginii">';
                            echo '<div class="col-lg-8">';
                            echo '<h6 class="mb-0">' . $posts[1]['title'] . '</h6>';
                            echo '<small class="text-body-secondary">January 15, 2024</small>';
                            echo '</div>';
                            echo '</a>';
                            echo '</li>';
                        }
                    ?>
            

                    <?php
                    if(isset($posts[4]['title'])) {
                        echo '<li>';
                        echo '<a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="testview.php?id=' . $posts[4]['test_blog_id'] . '">';
                        echo '<img src="../images/3.png" class="bd-placeholder-img" width="100%" height="110" alt="Descrierea imaginii">';
                        echo '<div class="col-lg-8">';
                        echo '<h6 class="mb-0">' . $posts[4]['title'] . '</h6>';
                        echo '<small class="text-body-secondary">January 13, 2024</small>';
                        echo '</div>';
                        echo '</a>';
                        echo '</li>';
                    }
                    ?>

                    <?php
                    if(isset($posts[5]['title'])) {
                        echo '<li>';
                        echo '<a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="testview.php?id=' . $posts[4]['test_blog_id'] . '">';
                        echo '<img src="../images/4.png" class="bd-placeholder-img" width="100%" height="110" alt="Descrierea imaginii">';
                        echo '<div class="col-lg-8">';
                        echo '<h6 class="mb-0">' . $posts[5]['title'] . '</h6>';
                        echo '<small class="text-body-secondary">January 13, 2024</small>';
                        echo '</div>';
                        echo '</a>';
                        echo '</li>';
                    }
                    ?>

          </ul>
        </div>

       
        <div class="p-4">
          <h4 class="fst-italic">Social</h4>
          <ol class="list-unstyled">
            <li><a href="https://github.com/imlimbasan">GitHub</a></li>
            <li><a href="https://twitter.com/MAIAdviserX">Twitter</a></li>
            <li><a href="https://www.youtube.com/@XAdvise">Youtube</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
 -->



  <!-- SECTIUNE DE CATEGORII!!!!!!!!!!! -->

        <section>
        <div class="container">
            <div class="text-center margin-40px-bottom">
            <h2 class="display-5 link-body-emphasis mb-1 row flex-nowrap justify-content-center align-items-center">Categories:</h2>        

            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-3 sm-margin-30px-bottom">
                    <div class="mh-100">
                        <a href="#" class="card bg-img box-hover cover-background h-100 border-0 p-4 dtext-decoration-none " style="background-image: url(../images/categoriesfirst.png);">
                            <div class="mt-auto position-relative z-index-9">
                                <h5 class="text-white ">DE-FI</h5>
                                <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row margin-30px-bottom">
                        <div class="col-md-4 xs-margin-30px-bottom">
                            <a href="" class="card bg-img box-hover cover-background border-0 p-4 text-decoration-none" data-background="img/content/02.jpg" style="background-image: url(../images/categories1.png);">
                                <div class="mt-auto position-relative z-index-9">
                                    <h5 class="text-white">RWA</h5>
                                    <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 xs-margin-30px-bottom">
                            <a href="#" class="card bg-img box-hover cover-background border-0 p-4 text-decoration-none" data-background="img/content/03.jpg" style="background-image: url(../images/categories2.png);">
                                <div class="mt-auto position-relative z-index-9">
                                    <h5 class="text-white">Gaming</h5>
                                    <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" class="card bg-img box-hover cover-background border-0 p-4 text-decoration-none" data-background="img/content/04.jpg" style="background-image: url(../images/categories3.png);">
                                <div class="mt-auto position-relative z-index-9">
                                    <h5 class="text-white">NFTs</h5>
                                    <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 xs-margin-30px-bottom">
                            <a href="#" class="card bg-img box-hover cover-background border-0 p-4 text-decoration-none" data-background="img/content/05.jpg" style="background-image: url(../images/categories6.png);">
                                <div class="mt-auto position-relative z-index-9">
                                    <h5 class="text-white">Owr picks &amp; Projects</h5>
                                    <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-5">
                            <a href="#" class="card bg-img box-hover cover-background border-0 p-4 text-decoration-none" data-background="img/content/06.jpg" style="background-image: url(../images/categories5.png);">
                                <div class="mt-auto position-relative z-index-9">
                                    <h5 class="text-white">Regulation</h5>
                                    <div class="position-relative z-index-9 text-white opacity6">FETCH LA POSTARI</div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p class="mb-0">
    <a href="#" class="btn btn-outline-dark">Back to top</a>
  </p>
  
</footer>



<footer class="nav-bg">
  <div class="container py-5">
      <div class="row">


      <div class="col-md-6">
                <h4>A Community driven blog for all cryptocurrencies</h4>
                <div class="newsletter-container nav-bg">
                    <h4>Be first to know!</h4>
                    <form action="../includes/newsletter.php" method="POST">
                        
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" aria-label="Recipient's email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button type="submit" name="submit-newsletter" class="btn btn-primary px-4" data-toggle="modal" data-target="exampleModal">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




          <div class="col-md-6">
              <div class="row">
                  <div class="col-md-6">
                      <h4>Coming soon</h4>
                      <ul class="list-unstyled ">
                          <li><a href="#" class="nav-bg">De-fi</a></li>
                          <li><a href="#" class="nav-bg">Ai</a></li>
                          <li><a href="#" class="nav-bg">Blogs</a></li>
                          <li><a href="#" class="nav-bg">Membership</a></li>
                      </ul>
                  </div>
                  <div class="col-md-6">
                      <h4>Follow Us</h4>
                      <ul class="list-unstyled">
                          <li><a href="#" class="nav-bg">Instagram</a></li>
                          <li><a href="#" class="nav-bg">Facebook</a></li>
                          <li><a href="#" class="nav-bg">YouTube</a></li>
                          <li><a href="#" class="nav-bg">Twitter</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <p>&copy; 2024 DYOR, <a href="#" class="nav-bg">Terms</a>,    <a href="#" class="nav-bg">Privacy</a></p>
           
          </div>
      </div>
  </div>
</footer>




<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="../cssPages/blog.css">

<link rel="stylesheet" type="text/css" href="../cssPages/blog.css?<?php echo time(); ?>" />


    </body>
</html>
