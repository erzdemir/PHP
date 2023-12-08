<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Flashcard App</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto my-5">
                <h3 class="text-center">Welcome Back! Login</h3>
                <div class="card bg-light">
                    <div class="card card-body">
                        <form action="login.php" method="post" autocomplete="off">
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="username">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="btn btn-success btn-sm text-center" value="Login Now!">
                            </div>
                        </form>
                        <p class="text-center">Need an account? <a href="register.php">Register!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>