<?php 
include 'connect.php';
if (isset($_POST['changePassword'])) {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $newPassword = $_POST['newPassword'];
    $sql = " SELECT * FROM users where uname='$userName' AND uemail='$userEmail'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    echo "check";
    if ($num > 0) {
        echo "khatra";
        $newsql="UPDATE users SET upassword='$newPassword' WHERE uname='$userName' AND uemail='$userEmail'";
        $newresult = mysqli_query($conn, $newsql);
        echo "<script>alert('Password Changed Successfully')</script>";
        header("location: login.php");
    }
    else{
        echo "<script>alert('Sorry, no account was found with that email address.')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="forget_password.css">
</head>
<body>
    <div class="main">
    <h2>Change Password</h2>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="userName">username:</label>
        <input type="text" id="userName" name="userName" required><br>

        <label for="userEmail">Email:</label>
        <input type="email" id="userEmail" name="userEmail" required><br>

        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword" required><br>
        
        <label for="confirmPassword">confirm_password Password:</label>
        <input type="password" id="confirmpassword" name="confirmPassword" required><br>

        <input type="submit" name="changePassword" value="Change Password">
    </form>
    </div>
</body>
</html>