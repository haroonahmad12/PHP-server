<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">

    <title>PHP Login System</title>
</head>

<body class="text-center">


    <div class="navbar navbar-dark bg-dark">
        <h2 class="navbar-brand mx-auto">Welcome to FaceTwitOogle.com</h2>
    </div>
    <form class="form-signin w-25 p-3 center mx-auto mt-5" action="./login.php" method="POST">
        <img class=" mb-4" src="./FTO.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            <?php require_once("./validate.php");
            if (isset($_SESSION["error"])) {
                $error = $_SESSION["error"];
                echo `<span>$error</span>`;
            } ?>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">FTO Digital© 2021</p>
    </form>


</body>

</html>