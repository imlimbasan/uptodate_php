<?php
session_start(); 

$dsn = "mysql:host=localhost;dbname=up_to_date";
$dbusername = "root";
$dbpassword = "PasssS2@";

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['fname']) && !empty($_POST['lname'])) {
        try {
            
            $pdo = new PDO($dsn, $dbusername, $dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $_POST['username']);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $error = "Username-ul este deja folosit!";
            } else {
              
                $newsletter = isset($_POST['newsletter']) ? 1 : 0;
                $stmt = $pdo->prepare("INSERT INTO users (fname, lname, email, username, password, newsletter) VALUES (:fname, :lname, :email, :username, :password, :newsletter)");
                $stmt->bindParam(':fname', $_POST['fname']);
                $stmt->bindParam(':lname', $_POST['lname']);
                $stmt->bindParam(':email', $_POST['email']);
                $stmt->bindParam(':username', $_POST['username']);
                $stmt->bindParam(':password', $_POST['password']);
                $stmt->bindParam(':newsletter', $newsletter);
                $stmt->execute();

                $_SESSION['username'] = $_POST['username'];
                header("Location: index.php"); 
                exit();
            }
        } catch (PDOException $e) {
            echo "Eroare de conectare la baza de date: " . $e->getMessage();
        }
    } else {
        $error = "Completați toate câmpurile!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 50px;
        }
        .signup-container {
            max-width: 500px;
            margin: 100px auto 0;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
            padding-top: 3rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="signup-container">
            <h2 class="mb-4">Sign Up</h2>
            <?php if (isset($error)) { ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php } ?>
            <form method="post">
                <div class="form-group">
                    <label for="fname">Prenume:</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
                <div class="form-group">
                    <label for="lname">Nume de familie:</label>
                    <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Parolă:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter">
                    <label class="form-check-label" for="newsletter">Abonare la newsletter</label>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
