<?php
// Initialize the session
if (!isset($_SESSION)) {
    session_start();
}

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["success"]) && $_SESSION["success"] === true) {
    header("location: dashboard.php");
    exit;
}

// Include config file
require_once "db-conn.php";

// Define variables and initialize with empty values
$username = $password = "";
$error = $success = "";

// Processing form data when form is submitted
if (isset($_POST["email"]) && isset($_POST["password"])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Validate credentials
    if (!empty($email) && !empty($password)) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";

        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = true;
            header('location: dashboard.php');
        } else {
            $error = "Incorrect email or password!";
        }
    }

    // Close connection
    mysqli_close($conn);
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>JCP Tester</title>
    <link rel="stylesheet" href="css/adminlogin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet" media="screen">
</head>


<body class="text-center">
    <div class="container">
        <div class="row">
            <?php
            if (!empty($error)) {
                echo "<div class='alert alert-danger' style='margin-top: -120px;' role='alert'><b>" . $error . "</b></div>";
            }
            ?>
        </div>
        <div class="row">
            <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <img class="mb-4" src="images/user_avatar.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal" style="color:whitesmoke;">Please sign in</h1>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <a class="btn btn-lg btn-dark btn-block" href="index.php">Home</a>

            </form>

        </div>

    </div>
</body>

</html>