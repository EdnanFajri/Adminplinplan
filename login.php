<!DOCTYPE html>
<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form class="form-signin" action="c/cekstatus.php" method="post">
            <h2 class="form-signin-heading">Introduce Yourself Sir</h2>
            <label for="inputCode" class="sr-only">Email address</label>
            <input type="text" id="inputCode" class="form-control" placeholder="Username" name="username" required>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="passwd" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        </form>
    </div>
</body>