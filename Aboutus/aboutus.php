<?php 
include '/login/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
    <link rel="shortcut icon" type="x-icon" href="icon1.png"><!--icon code-->
    <link rel="stylesheet" href="aboutus.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<body>
    <section class="about">
        <div class="topic">
            <h1>About Us</h1>
            <br>
            <p>Music is known as the Universal language. Melomix is a music player website.</p>
        </div>
            <div class="content">
                <div class="box">
                    <img src="Buttercup-pic.webp">
                    <h3><br><br>Aarati Rai</h3>
                    <h5>211402</h5>
                    <div class="icons">
                       <a href="https://www.instagram.com/yeoubii__/"> <ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
                </div>
               <div class="box">
                    <img src="blossom.webp">
                    <h3>Shreya Shrestha</h3>
                    <h5>211438</h5>
                    <div class="icons">
                        <a href="https://www.instagram.com/shreya.sstha/"> <ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
                </div>
            </div>
    </section>
   
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <!-- side meanu bar--> 
    <div id="SideNav">
        <nav>
            <ul>
                <li><a href="/welcomepage/welcomepage.html">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">LOG OUT</a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="menu.png" id="menu">
    </div>
    <script>
        var menuBtn= document.getElementById("menuBtn")
        var SideNav= document.getElementById("SideNav")
        var menu= document.getElementById("menu")

        SideNav.style.right="-250px";
 
        menuBtn.onclick = function(){
            if(SideNav.style.right=="-250px"){
                SideNav.style.right= "0";
                menu.src = "close.png";
            }
            else{
                SideNav.style.right = "-250px";
                menu.src = "menu.png";
            }
        }
    </script> 
    <!--end of nav bar-->
<!-- ------------------------------------------------- -->




    



</body>
</html>