<?php

session_start();

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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" defer ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>
    <script src="footer.js" defer></script>
    <script src="navbar.js" defer></script>
    <script src="index.js" defer></script>
    
    <script src="https://kit.fontawesome.com/b42bd02faf.js" crossorigin="anonymous"></script>    

    <title>UpToDate</title>

</head>

<body>
    <header>
     <div class="nav-bg fixed-top ">
   <div class="nav-bg container">
    <nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon nav-bg"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 border-bottom">
      <li class="nav-item ">
        <a class="nav-link nav-bg" href="#">Home</a>
      </li>     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link nav-bg" href="index_blog.php">To Blog</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link nav-bg" href="./contact.php">Contact</a>
        </li>
        <?php
            if(isset($_SESSION["username"])){
                echo '<li class="nav-item">
                <a class="nav-link nav-bg" href="../includes/logout.php">LOG OUT</a>
              </li>';
            }else{
                echo '<li class="nav-item">
                <a class="nav-link nav-bg" href="./login.php">LOG IN</a>
              </li>';
            };
        ?>
      </ul>
    </form>
  </div>
</nav>
</div>
</header>


    <div class="jumbotron container headinng-bg">
      <h1 class="display-3 head-h1">UpToDate</h1>
      <p class="lead head-p ">Decentralized Autonomous Organizations "DAOs" operate without a central authority, giving all participants an equal say in decision-making processes.</p>
      <hr class="my-4 head-p">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg " href="#" role="button">Learn more</a>
      </p>
    </div>

    
  
 
  <div class="new-engine-bg ">
    <div class="d-flex justify-content-center ">
    <div class="container-md">
      <h1 class="display-4 d-flex align-items-center justify-content-center">Building a new economic engine for culture</h1>
      <div class="card mb-3 border-0" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/create1.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title text-padding">You wrote it, you own it.</h5>
              <p class="card-text text-padding ">You always own your intellectual property, mailing list, and subscriber payments. With full editorial control and no gatekeepers, you can do the work you most believe in.</p>
              <a href="#">Create your UpToDate &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <div class="d-flex justify-content-center">
    <div class="container-md">
      <div class="card mb-3 border-0" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/create2.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title text-padding">Grow your audience.</h5>
              <p class="card-text text-padding">Marketing is not all on your shoulders. More than 40% of all new free subscriptions and around 20% of paid subscriptions to Substacks come from within our network.</p>
              <a href="#">Create your UpToDate &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center">
    <div class="container-md">
      <div class="card mb-3 border-0" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../images/create3.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-padding">
              <h5 class="card-title text-padding">Let us handle everything else.</h5>
              <p class="card-text text-padding" >A Substack combines a blog, newsletter, payment system, and customer support team — all integrated seamlessly with a simple interface. We handle the admin, billing, and tech so you can focus on your best work.</p>
              <a href="#">Create your UpToDate &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<div class="phone-bg">
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="phone-section">
        <div class="phone-content">
          <div class="phone-blog">
            <div class="phone-right ">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h1 class="display-4">Posts</h1>
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                     UpToDate's simple system lets you publish to the web, email, and our app simultaneously so you can find new readers and always reach your existing audience.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h1 class="display-4">Summary</h1>
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      We make it easy to start a subscription podcast. Share episodes to Substack subscribers and to all the major podcast players with one click.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h1 class="display-4" >Community</h1>
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      On UpToDate, you're not publishing into a void. Comments and community threads connect you and your subscribers directly.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <h1 class="display-4">Audio</h1>
                      </button>
                    </h5>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                      Upload or record audio directly into a UpToDate post. Make videos available to everyone or only paid subscribers.
                    </div>
                  </div>
                </div>

              </div>            
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="phone-section">
        <div class="phone-content">
          <div class="phone-blog"> 
            <div class="phone-left">
              <img src="../images/phone.png" class="rounded mx-auto d-block" alt="Italian Trulli">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<div class="background-carusel">
<div class="container">  
  <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade d-flex " data-ride="carousel">
    <h1 class="display-4">Trusted_by:</h1> 
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/trusted1.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img src="../images/trusted2.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img src="../images/trusted3.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img src="../images/trusted4.png" alt="Fourth slide">
      </div>
      <div class="carousel-item">
        <img src="../images/trusted5.png" alt="Fifth slide">
      </div>
        <div class="carousel-item">
          <img src="../images/trusted6.png" alt="Fourth slide">
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container-ms d-flex justify-content-center">
  <div class="container-md">
    <div class="card-group">
      <div class="card bg-dark text-white">
        <img class="card-img" src="../images/Midas.png" alt="Card image">
        <div class="card-img-overlay">
        </div>
      </div>
      <div class="card bg-dark text-white">
        <img class="card-img" src="../images/Bhero.png" alt="Card image">
        <div class="card-img-overlay">
        </div>
      </div>
      <div class="card bg-dark text-white">
        <img class="card-img" src="../images/Multiversx.png" alt="Card image">
        <div class="card-img-overlay">
        </div>
      </div>
    </div>
  </div>
</div>

<!--
<blockquote class="blockquote">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
-->

<div class="footer-bg">
  <div class="headinng">
    <div class="container-fluid d-flex align-items-center justify-content-center" >
        <div class="get-started ">
          <div class="started-content ">
            <div class="get-started-pad"><h1 class="display-4 ">Get started in minutes</h1></div>      
            <p class="lead">
              <a class="btn btn-primary btn-lg d-flex align-items-center justify-content-center" href="#" role="button">Create UpToDate Post</a>
            </p>
        </div>
      </div>
    </div>
  </div>
</div>

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

   


     


</body>
</html>


