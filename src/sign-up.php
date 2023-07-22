<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $upassword = $_POST['upassword'];
    $cpassword = $_POST['cpassword'];
    if ($upassword = $cpassword) {
        $sql = "
    INSERT INTO users(uname,uemail,upassword,cpassword)
    VALUES ('$uname','$uemail','$upassword', current_timestamp())
    ";
    $result = mysqli_query($conn,$sql);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="sign-up.css">
</head>

<body>
    <div class="main">
        <div class="content">
            <div class="branding">
                <h1 class="brand-name">Dear Diary</h1>
                <img id="image" src="/Dear-Diary/img/pic.png" alt="branding photo">
                <h3 id="quote">"Within the pages of your diary, lies the untold beauty of your soul."</h3>
            </div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="log-in-user">
                    <p id="log-in">Welcome</p>
                    <input type="text" name="uname" placeholder="Username">
                    <input type="email" name="uemail" placeholder="Email or phone number">
                    <input type="password" name="upassword" placeholder="Password">
                    <input type="password" name="cpassword" placeholder="Confirm password">
                    <div class="sign-up">
                        <p id="terms">By signing up you agree to our Terms of use and privacy policy</p>
                        <input class="sign-up-btn" type="submit" name="submit" value="Sign up">
                    </div>
                    
                    <hr>
                    <div class="log-in-here">
                        <p>Already have an account?</p><a href="login-in.php">Login Here</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <footer>
        <div class="fcontent">
            <div class="foot-1">
                <a class="fa" href="#">Journals</a>
                <a class="fa" href="#">Diaries</a>
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