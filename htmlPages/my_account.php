<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "PasssS2@", "up_to_date");



$username = $_SESSION["username"];



$sql = "SELECT lname, fname, email, newsletter FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$lname = $row['lname'];
$fname = $row['fname'];
$email = $row['email'];
$newsletter = $row['newsletter'];

define('__DEBUG__', true);

$sql_count = "SELECT COUNT(*) AS total_inregistrari FROM test_blog";
$query_count = mysqli_query($conn, $sql_count);
    $row_count = mysqli_fetch_assoc($query_count);
    $total_inregistrari = $row_count['total_inregistrari'];


$sql_count = "SELECT COUNT(*) AS total_useri FROM users";
$query_users = mysqli_query($conn, $sql_count);
    $user_count = mysqli_fetch_assoc($query_users);
    $total_useri = $user_count['total_useri'];



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../cssPages/my_account.css">
    <link rel="stylesheet" href="../cssPages/categories.css">   
    <link rel="stylesheet" href="../cssPages/footer.css">
    <link rel="stylesheet" href="../cssPages/body.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/index.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/footer.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/body.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/slider.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/navbar.css">
    <link rel="stylesheet" href="../cssPages/my_account.css">
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


<br><br>

<!-- 
        <div class="username d-flex justify-content-center align-items-center">
    <div class="container-sm">
		<div class="main-body">
			<div class="row">				
				<div class=" ">
					<div class="card">
						<div class="card-body">
                        <form action="../includes/update_user_click.php" method="POST"> 
    <div class="row mb-3">
        <div class="col-sm-3">
            <h6 class="mb-0">Username</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <input type="text" class="form-control border-0 border-bottom" value="<?php echo $_SESSION['username']; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3">
            <h6 class="mb-0">First Name</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <input type="text" class="form-control border-0 border-bottom" value="<?php echo $lname ?>" name="lname">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3">
            <h6 class="mb-0">Last Name</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <input type="text" class="form-control border-0 border-bottom" value="<?php echo $fname ?>" name="fname">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3">
            <h6 class="mb-0">Email</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <input type="text" class="form-control border-0 border-bottom" value="<?php echo $email ?>" name="email">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3">
            <h6 class="mb-0">Newsletter</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <label class="switch">
                <input type="checkbox" <?php echo ($newsletter == 1) ? 'checked' : ''; ?> name="newsletter">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="clasabutn d-flex justify-content-center align-items-center ">

                            <div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
                                <button type="submit" name="update" class="btn btn-dark">Update</button>
								</div>
							</div>
    </div>
</form>

						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

</main> -->

                           

<div class="container">
		<div class="main-body">            
			<div class="row">
				<div class="col-lg-4 ">
					<div class="card ">
                        
						<div class="card-body  ">
                        <h1>Hello <?php echo $_SESSION['username']; ?></h1>
                        <br>
							



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
					</div>
				</div>



                
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">

                        <form action="../includes/update_user_click.php" method="POST"> 
    <div class="row mb-3">
        <div class="col-sm-3">
            <h6 class="mb-0">Username</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <input type="text" class="form-control border-0 border-bottom" value="<?php echo $_SESSION['username']; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3">
            <h6 class="mb-0">First Name</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <input type="text" class="form-control border-0 border-bottom" value="<?php echo $lname ?>" name="lname">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3">
            <h6 class="mb-0">Last Name</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <input type="text" class="form-control border-0 border-bottom" value="<?php echo $fname ?>" name="fname">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3">
            <h6 class="mb-0">Email</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <input type="text" class="form-control border-0 border-bottom" value="<?php echo $email ?>" name="email">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-3">
            <h6 class="mb-0">Newsletter</h6>
        </div>
        <div class="col-sm-9 text-secondary">
            <label class="switch">
                <input type="checkbox" <?php echo ($newsletter == 1) ? 'checked' : ''; ?> name="newsletter">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <div class="clasabutn d-flex justify-content-center align-items-center ">

                            <div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
                                <button type="submit" name="update" class="btn btn-primary px-4">Update</button>
								</div>
							</div>
    </div>
</form>



						






						</div>



					</div>
					




				</div>
			</div>
		</div>
	</div>


<br><br><br><br><br><br><br>


<footer class="nav-bg">
  <div class="container py-5">
      <div class="row">
          <div class="col-md-6">
              <h4>A Community driven blog for all cryptocurrencies</h4>
              <div class="newsletter-container nav-bg">
                  <h4>Be first to know!</h4>
                  <form action="#" method="POST">
                      <div class="input-group mb-3">
                          <input type="email" class="form-control" placeholder="Enter your email" aria-label="Recipient's email" aria-describedby="button-addon2">
                          <div class="input-group-append">
                              <button class="btn btn-outline" type="button" id="button-addon2">Subscribe</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
          <div class="col-md-6">
              <div class="row">
                  <div class="col-md-6">
                      <h4>Online Shop</h4>
                      <ul class="list-unstyled ">
                          <li><a href="#" class="nav-bg">Watch</a></li>
                          <li><a href="#" class="nav-bg">Bag</a></li>
                          <li><a href="#" class="nav-bg">Shoes</a></li>
                          <li><a href="#" class="nav-bg">Dress</a></li>
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
<link rel="stylesheet" type="text/css" href="../cssPages/my_account.css?<?php echo time(); ?>" />

    </body>
</html>
