<?php

require_once "db-conn.php";

$email_error = $error = $success = "";

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // query for checking in the database
    $user_check_query = "SELECT * FROM users WHERE email='$email'";

    $result = $conn->query($user_check_query);
    if (!$result) {
        $error = "Something Went Wrong! Try Again After Rereshing!";
    }
    // if  user exists
    if ($result->num_rows == 1) {
        $email_error = "Email already exists";
    } else {

        $password = md5($password);

        $query = "INSERT INTO users (email, password)
                  VALUES('$email', '$password')";

        $res = mysqli_query($conn, $query);

        if ($res) {
            $success = "User Added Successfully!";
        } else {
            $error = "Something went wrong while adding the user";
        }
    }

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
    <link href="css/signin.css" rel="stylesheet">
</head>


<body class="text-center">
    <div class="container">
        <div class="row">
            <?php
            if (!empty($email_error)) {
                echo "<div class='alert alert-danger' style='margin-top: -120px;' role='alert'><b>" . $email_error . "</b></div>";
            }
            if (!empty($error)) {
                echo "<div class='alert alert-danger' style='margin-top: -120px;' role='alert'><b>" . $error . "</b></div>";
            }
            if (!empty($success)) {
                echo "<div class='alert alert-success' style='margin-top: -120px;' role='alert'><h4 class='alert-heading'>Congratulations!</h4><b>" . $success . "</div>";
            }
            ?>

        </div>
        <div class="row">
            <form class="form-signin" action="register.php" method="POST">
                <img class="mb-4" src="images/user_avatar.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal" style="color:whitesmoke;">Register an user</h1>
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Username" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                <a class="btn btn-lg btn-secondary btn-block" style="color:thistle;" href="dashboard.php">Dashboard</a>

            </form>

        </div>

    </div>
</body>

</html>