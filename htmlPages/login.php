
<?php
session_start(); 

$dsn = "mysql:host=localhost;dbname=up_to_date";
$dbusername = "root";
$dbpassword = "PasssS2@";


if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        try {
            
            $pdo = new PDO($dsn, $dbusername, $dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
            $stmt->bindParam(':username', $_POST['username']);
            $stmt->bindParam(':password', $_POST['password']);
            $stmt->execute();

            if ($stmt->rowCount() == 1) {
                $_SESSION['username'] = $_POST['username'];
                header("Location: index_blog.php"); 
                exit();
            } else {
                $error = "Username sau parolă incorectă!";
            }
        } catch (PDOException $e) {
            echo "Eroare de conectare la baza de date: " . $e->getMessage();
        }
    } else {
        $error = "Completati ambele campuri!";
    }

       

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UpToDate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../cssPages/index.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/footer.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/contact.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/slider.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/navbar.css">
    <link rel="stylesheet" type="text/css" href="../cssPages/login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="nav-bg fixed-top ">
            <div class="container">
                <nav class="navbar navbar-expand-lg ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon nav-bg"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 border-bottom">
                            <li class="nav-item ">
                                <a class="nav-link nav-bg" href="../htmlPages/index.php">Home</a>
                            </li>     
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
          <a class="nav-link nav-bg" href="index_blog.php">To Blog</a>
        </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-bg" href="../htmlPages/contact.php">Contact</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </nav>
            </div> 
        </div> 
    </header> 


    <div class="container">
        <div class="login-container">
            <h2 class="mb-4">Login</h2>
            <?php if (isset($error)) { ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php } ?>
            <form method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <p class="mt-3">Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>

    <footer class="nav-bg fixed-bottom"> 
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
                            <h4>Coming soon</h4>
                            <ul class="list-unstyled">
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../cssPages/login.css?<?php echo time(); ?>" />



</body>
</html>
