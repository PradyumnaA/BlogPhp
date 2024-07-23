<?php
session_start();
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "admin" && $password == "pass") {
        $_SESSION["user"] = "admin";
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container mt-5" style="max-width:600px">
        <div class="login-form">
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <input class="form-control" type="text" name="username" id="" placeholder="User Name">
                </div>
                <div class="form-field mb-4">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Enter the password">
                </div>
                <div class="form-field mb-4">
                    <input class="btn btn-primary" type="submit" value="Login" name="login"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
