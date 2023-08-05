<?php
include 'connect.php';
include 'config.php';
if (isset($_POST['submit'])) {
    $email = $_POST['uemail'];
    $password = $_POST['upassword'];
    $sql = " SELECT * FROM users where uemail='$email' AND upassword='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['useremail'] = $email;
        header("location: about.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login in</title>
    <link rel="stylesheet" href="login-in.css?v=<?php $version?>">
</head>
<?php

?>

<body>
    <div class="main">
        <div class="content">
            <div class="branding">
                <h1 class="brand-name">Dear Diary</h1>
                <img id="image" src="/Dear-Diary/img/pic.png" alt="branding photo">
                <h3 id="quote">"Within the pages of your diary, lies the untold beauty of your soul."</h3>
            </div>
            <div class="log-in-user">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <p id="log-in">Welcome</p>
                    <input type="email" name="uemail" placeholder="Email or phone number">
                    <input type="password" name="upassword" placeholder="Password" required>
                    
                    <a id="pass" href="#">Forgot password ?</a>
                    <input class="sub" type="submit" name="submit" value="Log in">
                    <div class="sign">
                        <p>Don't have an account?</p><a href="sign-up.php">sign-up</a>
                    </div>

                    <div class="sign-in-with">
                        <p id="par">OR</p>
                        <p>Sign in with</p>
                        <div class="simages">
                            <img class="sign-in-image" src="/Dear-Diary/img/Facebook_icon.png" alt="Facebook icon">
                            <img class="sign-in-image" src="/Dear-Diary/img/favicon.png" alt="Google icon">
                            <img class="sign-in-image" src="/Dear-Diary/img/twitter_icon.png" alt="twitter icon">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="fcontent">
            <div class="foot-1">
                <a class="fa" href="#">Journals</a>
                <a class="fa" href="about.html">Diaries</a>
                <a class="fa" href="#">Privary</a>
                <a class="fa" href="#">Terms</a>
            </div>
            <div class="foot-2">
                <a class="fa" href="#">Dear Diary 2023</a>
            </div>
        </div>
    </footer>
</body>

</html>