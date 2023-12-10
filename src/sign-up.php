<?php
include 'connect.php';
include 'config.php';
if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $upassword = $_POST['upassword'];
    $cpassword = $_POST['cpassword'];
    //checking email already exists
    $checkSql = "SELECT * FROM users WHERE uemail='$uemail'";
    $checkResult = mysqli_query($conn, $checkSql);
    $checkNum= mysqli_num_rows($checkResult);
    if ($checkNum<1) {
        // echo "hello";
        $sql = "
        INSERT INTO users(uname,uemail,upassword)
        VALUES ('$uname','$uemail','$upassword')
        ";
            $result = mysqli_query($conn, $sql);
            header('location:login.php');
    } 
    //inserting new email
    else {
        echo "<script>
        alert('Email already exists');
        </script>";

        //didnot work,may be because of auto refresh
        // echo"<script> 
        // document.getElementById('error_show').innerHTML='Email already exists';
        // </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="sign-up.css?v=<?= $version ?>">
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
                    <p id="error_show"></p>
                    <input type="text" name="uname" id="uname" placeholder="Username">
                    <input type="text" name="uemail" id="uemail" placeholder="Email or phone number">
                    <input type="password" name="upassword" id="upassword" placeholder="Password">
                    <p id="password_criteria">Password must be atleast 6 characters long with symbol and number</p>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password">
                    <div class="sign-up">
                        <p id="terms">By signing up you agree to our Terms of use and privacy policy</p>
                        <input class="sign-up-btn" type="submit" name="submit" value="Sign up"
                            onclick="return validate()">
                    </div>
                    <hr>
                    <div class="log-in-here">
                        <p>Already have an account?</p><a href="login.php">Login Here</a>
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
    <script>

        function validate() {
            let username = document.getElementById('uname').value;
            let email = document.getElementById('uemail').value;
            let password = document.getElementById('upassword').value;
            let confirm_password = document.getElementById('cpassword').value;
            let error_show = document.getElementById('error_show');
            //for all data entry
            if (username === "" || email === "" || password === "" || confirm_password === "") {
                error_show.innerHTML = "Fields cannot be empty";
                return false;
            }
            //for username
            // atleast 5 characters long username
            if (username.length < 5) {
                error_show.innerHTML = "Username must be atleast 5 characters long";
                return false
            }
            //for email validate
            let emailreg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (!email.match(emailreg)) {
                error_show.innerHTML = "Invalid email address";
                return false;
            }
            //for password
            //password must be atleast 6 characters long with symbol and number
            let passwordreg = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            if (!password.match(passwordreg)) {
                error_show.innerHTML = "Invalid password";
                return false;
            }
            //for confirm password
            if (password !== confirm_password) {
                error_show.innerHTML = "Password does not match";
                return false;
            }
            else {
                return true;
            }
        }
    </script>
</body>

</html>