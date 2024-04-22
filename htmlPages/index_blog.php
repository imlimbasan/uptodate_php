<?php 

session_start();

$conn = mysqli_connect("localhost", "root", "PasssS2@", "up_to_date");

$sql = "SELECT * FROM test_blog WHERE test_blog_id IN (16, 18, 19, 20)";

$query= mysqli_query($conn, $sql);
$posts=array();
while ($row = mysqli_fetch_assoc($query)) {
    array_push($posts, $row);
  }

  mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="blog.css">
    <link rel="stylesheet" type="text/css" href="blog.rtl.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

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

<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="createblog.html">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">UpToDate</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">   

      <a href="test1index.php" class="btn btn-outline-dark"> Create Post</a>
    
            <?php
            if(isset($_SESSION["username"])){
                echo '<li class="nav-item">
                <a class="btn btn-sm btn-outline-secondary" href="../includes/logout.php">LOG OUT</a>
              </li>';
            }else{
                echo '<li class="nav-item">
                <a class="btn btn-sm btn-outline-secondary" href="./login.php">LOG IN</a>
              </li>';
            };
        ?></a>
      </div>
    </div>
  </header>

  <div class="nav-scroller  border-bottom">   
  </div>
</div>








<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic"><?php echo $posts[0]['title']; ?></h1>
      <p class="lead my-3"><?php echo $posts[0]['content']; ?></p>
      <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
    </div>
  </div>


  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">Music</strong>
          <h3 class="mb-0"><?php echo $posts[1]['title'];?></h3>
          <div class="mb-1 text-body-secondary">Nov 12</div>
          <p class="card-text mb-auto"><?php echo $posts[1]['content'];?></p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="../images/Midas.png" class="bd-placeholder-img" width="200" height="250" alt="Descrierea imaginii">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">DE-FI</strong>
          <h3 class="mb-0"><?php echo $posts[3]['title']?></h3>
          <div class="mb-1 text-body-secondary">Nov 11</div>
          <p class="mb-auto"><?php echo $posts[3]['content']?></p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img src="../images/Bhero.png" class="bd-placeholder-img" width="200" height="250" alt="Descrierea imaginii">
        </div>
      </div>
    </div>
  </div>

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
        <h2>How Uptodate Works:</h2>
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
        </ul>
       
        <h2>Join the Uptodate Community:</h2>
        <ul>
          <li>Ready to transform the way you consume crypto news?</li>
          <li><em>Join us on Uptodate.</em></li>
          <li>Become part of a vibrant community.</li>
          <li>Dedicated to staying informed, connected, and empowered</li>
          <li><ins>Navigate the ever-evolving crypto landscape with confidence and clarity.</ins> </li>
        </ul>
        <h2>Conclusion:</h2>
        <p>In a world inundated with information, Uptodate emerges as a beacon of reliability, transparency, and decentralization. Join us as we redefine how we stay informed in the fast-paced realm of crypto. Together, let's forge a future where knowledge is accessible to all, and information is truly decentralized.</p>
       </article>
<hr>
<br>
<br>

<!--                  -->

      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">EGLD STAKING V4 IT'S COMING SOON!</h2>
        <p class="blog-post-meta"> Mar 23, 2024 by <a href="#">MEXTO1</a></p>

        <p>Great strides have been made in the staking and delegation system, and these improvements will bring significant benefits to every user.</p>
        <blockquote>
          <p><strong>Before the update, the system had some limitations and was not functioning at its maximum capacity. The waiting list was a hurdle, and some nodes did not contribute to the network's security as ideally as they should have.</strong></p>
        </blockquote>
        <p>But now, the waiting list has been completely eliminated. Instead, a bidding system has been introduced, which selects the best validators for the network. This means that our network becomes more open, democratic, and robust than ever before.</p>
        <p>But what does this mean for you as a user? Well, here are some of the major advantages you will experience:</p>
        <table class="table">

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
        </table>

        <p>Great strides have been made in the staking and delegation system, and these improvements will bring significant benefits to every user.</p>
      </article>

      <hr>
      <br>
      <br>


      <!--               -->
      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">Upcoming:</h2>
<br>        
          <dt>Connecting with MultiversX API:</dt>
          <p> One of the exciting developments on the horizon for Uptodate is our integration with the MultiversX API. This groundbreaking partnership will allow us to access a wealth of real-time data and insights from the MultiversX ecosystem, providing our users with unparalleled access to the latest trends, analyses, and developments in the crypto space.</p>
          <dt>Proof of Identity on the Blockchain:</dt>
          <p>At Uptodate, we take security and trustworthiness seriously. That's why we're implementing a cutting-edge Proof of Identity mechanism powered by blockchain technology. With this feature, users can verify their identity securely and transparently, ensuring that the content they create and consume on Uptodate is authentic and reliable.</p>
          <dt>Delving into Blockchain Basics:</dt>
          <p>For those new to blockchain technology, let's take a moment to explore the basics. Blockchain is a decentralized, distributed ledger technology that records transactions across a network of computers. Each transaction is securely encrypted and linked to the previous one, forming a chain of blocks that are immutable and tamper-proof. This inherent transparency and security make blockchain an ideal solution for verifying identity and ensuring the integrity of data on platforms like Uptodate.</p>

      </article>

   

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Decentralized Autonomous Organizations "DAOs" operate without a central authority, giving all participants an equal say in decision-making processes.</p>
        </div>

        <div>
          <h4 class="fst-italic">Recent posts</h4>
          <ul class="list-unstyled">
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
              <img src="../images/Midas.png" class="bd-placeholder-img" width="100%" height="96" alt="Descrierea imaginii">
                <div class="col-lg-8">
                  <h6 class="mb-0"><?php echo $posts[2]['title'];?></h6>
                  <small class="text-body-secondary">January 15, 2024</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
              <img src="../images/ith.jpeg" class="bd-placeholder-img" width="100%" height="96" alt="Descrierea imaginii">
                <div class="col-lg-8">
                  <h6 class="mb-0"><?php echo $posts[1]['title'];?></h6>
                  <small class="text-body-secondary">January 14, 2024</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
              <img src="../images/Midas.png" class="bd-placeholder-img" width="100%" height="96" alt="Descrierea imaginii">
                <div class="col-lg-8">
                  <h6 class="mb-0"><?php echo $posts[0]['title'];?></h6>
                  <small class="text-body-secondary">January 13, 2024</small>
                </div>
              </a>
            </li>
          </ul>
        </div>

       
        <div class="p-4">
          <h4 class="fst-italic">Social</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instangram</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p class="mb-0">
    <a href="#">Back to top</a>
  </p>
</footer>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="../cssPages/blog.css">
    </body>
</html>
