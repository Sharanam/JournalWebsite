<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Journal Website</title>
    <?php include "header.html"; ?>
    <form action="auth_login.php" method="POST">
        <b>Sign in as an Author...</b>
        <div class="center">
            <input type="text" name="Email" placeholder="Email">
            <input type="password" name="Password" placeholder="Password">
        </div>
        <input type="submit" value="Sign In">
        <div class="flex f-sbtwn">
            <a href="#">Forgot Password</a>
            <a href="signup.php">Create Account</a>
        </div>
    </form>

    <?php include "footer.html";?>
