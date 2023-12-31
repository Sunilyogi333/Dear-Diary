<?php
include 'connect.php';
include 'config.php';
include 'read.php';
if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header('location:login.php');
    exit;
}
if (isset($_POST['fsubmit'])) {
    $fname = $_POST['fname'];
    $femail = $_POST['femail'];
    $feedback= $_POST['feedback'];
        $fsql = "
        INSERT INTO feedbacks(fname,femail,feedback)
        VALUES ('$fname','$femail','$feedback')
        ";
            $fresult = mysqli_query($conn, $fsql);
            // echo "<script>alert('Feedback submitted')</script>";
    } 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="about.css?v=<?php $version ?>">
    <script src="https://kit.fontawesome.com/5a78363638.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <nav>
                <div class="nav2">
                    <ul class="uppernav">
                        <li><a href="about.php">About</a></li>
                        <li><a href="journals.php">Journals</a></li>
                        <li><a href="#" onclick="toggleMenu()"><i class="fa fa-caret-down"></i><?php echo $_SESSION['uname'] ?></a></li>
                    </ul>
                    <div class="open-menu" id="drop" >
                      <ul id="lowernav">
                        <li><a href="#"><i class="fa-solid fa-gear fa-lg"></i>Settings</a></li>
                        <li><a href="#"><i class="fa-regular fa-circle-question fa-lg"></i>help & support</a></li>
                        <li><a href="logout.php" onclick="return logout()"><i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>logout</a></li>
                        <li><a href="#"><i class="fa-regular fa-comment fa-lg"></i>Feedback</a></li>
                       </ul>
                   </div>
                   </div>
            </nav>
        </div>
        <div class="content">
            <div class="part-1">
                <div class="branding">
                    <img id="brand-logo" src="/Dear-Diary/img/Branding-photo.png" alt="branding photo">
                </div>
                <div class="intro">     
                    <p class="para1">What are you writing for?
                        Whether you're looking for a tool to record your daily emotions and activities in a reflective
                        journal,
                        keep track of milestones in a food diary or pregnancy journal, or even record your dreams in a
                        dream
                        journal, Dear Diary has you covered.</p>
                    <p class="para1">
                        Dear Diary gives you all the tools you need to focus on the ideas you want to preserve, rather
                        than
                        the
                        process of writing itself.
                    </p>
                    <a class="brand-get-started-btn" href="journals.php">Start Your Journal Now !</a>
                </div>
            </div>
            <div class="part-2">
                <div class="part2-i">
                    <h2 class="concern"> Privacy is our #1 Concern</h2>
                    <p>
                        Even when carefully kept, paper journals can be read by anyone who happens upon them.
                    </p>
                    <p>
                        Dear Diary keeps your journals safe with double password protection and military strength
                        encryption
                        so you can rest easy
                        knowing that your entries are secure in the Penzu Vault
                    </p><br><br>
                    <a class="get-started-btn" href="journals.php">Get Started</a>
                </div>
                <div class="part2-ii">
                    <br>
                    <img id="flocking" src="/Dear-Diary/img/feature_locking.jpg" alt="feature locking">
                </div>
            </div>
            <div class="part-3">
                <div class="part3-i">
                    <img id="laptop" src="/Dear-Diary/img/laptop.jpg" alt="laptop">
                </div>
                <div class="part3-ii">
                    <h2 class="concern"> Write From Anywhere</h2>
                    <p>
                        Take your journals wherever you go with the Penzu mobile apps for iPhone, iPad, and Android
                        phones and tablets.
                    </p>
                    <br><br>
                    <a class="get-started-btn" href="journals.php">Get Started</a>
                </div>
            </div>
            <div class="part4">
                <div class="part4-i">
                    <div class="feature-icon">
                        <div class="icon-img">
                            <img src="/Dear-Diary/img/private_lock.png" alt="icon">
                        </div>
                        <h2>100% Private</h2>
                        <p>
                            Designed to focus on privacy, your entries are totally private by default!
                        </p>
                    </div>
                    <div class="feature-icon">
                        <div class="icon-img">
                            <img src="/Dear-Diary/img/phone_cell.png" alt="icon">
                        </div>
                        <h2>Available Everywhere</h2>
                        <p>
                            Enjoy Penzu on the move. Available for iOS and Android and totally free!
                        </p>
                    </div>
                    <div class="feature-icon">
                        <div class="icon-img">
                            <img src="/Dear-Diary/img/alarm_icon.png" alt="icon">
                        </div>
                        <h2>Never Forget to Write</h2>
                        <p>
                            Custom email reminders help you make sure you never forget to write.
                        </p>
                    </div>
                </div>
                <div class="part4-i">
                    <div class="feature-icon">
                        <div class="icon-img">
                            <img src="/Dear-Diary/img/customizable_icon.png" alt="icon">
                        </div>
                        <h2>Fully Customizable Diary</h2>
                        <p>
                            Make each journal your own with custom covers, backgrounds, and fonts.
                        </p>
                    </div>
                    <div class="feature-icon">
                        <div class="icon-img">
                            <img id="sjournal-icon" src="/Dear-Diary/img/smart_journal.png" alt="icon">
                        </div>
                        <h2>Smart Journal Search
                        </h2>
                        <p>
                            Quickly and easily search through your journals, entries, and tags
                        </p>
                    </div>
                    <div class="feature-icon">
                        <div class="icon-img">
                            <img src="/Dear-Diary/img/locker.png" alt="icon">
                        </div>
                        <h2>Military Grade Security</h2>
                        <p>
                            Further protect your diary with military-grade 256-bit AES encryption.
                        </p>
                    </div>
                </div>
            </div>
            <div class="part4 part-5">
                <div class="part5-i">
                    <h2>
                        Diary and Journal Writing Resources
                    </h2>
                </div>
                <div class="part4-i part5-ii">
                    <div class="feature-icon part5ii-1">
                        <h3>Journaling Basics</h3>
                        <a href="#">What is journal?</a>
                        <a href="#">What is Journal Entry</a>
                        <a href="#">Benefits of Jounaling</a>
                        <a href="#">Journal Types</a>
                        <a href="#">How to Write a Jounal</a>
                        <a href="#">Journal Examples</a>
                    </div>
                    <div class="feature-icon part5ii-1">
                        <h3>Types of Journals</h3>
                        <a href="#">Bible Journal</a>
                        <a href="#">Dream Jounal</a>
                        <a href="#">Prayer Journal</a>
                        <a href="#">Gratitue Journal</a>
                        <a href="#">Reflective Journal</a>
                        <a href="#">Travel Journal</a>
                    </div>
                    <div class="feature-icon part5ii-1">
                        <h3>Diary Basics</h3>
                        <a href="#">What is a Diary?</a>
                        <a href="#">What is a Diary Entry?</a>
                        <a href="#">How to Write Diary</a>
                        <a href="#">Diary Types</a>
                        <a href="#">Diary Software</a>
                        <a href="#">Digital Diares</a>
                    </div>
                    <div class="feature-icon part5ii-1">
                        <h3>Types of Diaries</h3>
                        <a href="#">Academic Diary</a>
                        <a href="#">Food Diary</a>
                        <a href="#">health Diary</a>
                        <a href="#">School Diary</a>
                        <a href="#">Secret Diary</a>
                        <a href="#">Work Diary</a>
                    </div>
                </div>
            </div>
            <div class="SYF">
                <h2>Feel Free to drop us your Feedback !</h2>
            </div>
            <div class="part-6">
                <form class="p6-feedback" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" >
                    <div class="part6-i">
                        <div class="givefeedback">
                            <label for="Full Name">Full Name</label>
                            <input type="text" name="fname" required>
                        </div>
                        <div class="givefeedback">
                            <label for="Email">Email</label>
                            <input type="email" name="femail" required>
                        </div>
                        <input class="fsubmit" type="submit" name="fsubmit" required>
                    </div>
                    <div class="part6-ii">
                        <textarea name="feedback" placeholder="Enter your opinion here..." id="feedback" cols="30"
                            rows="10"></textarea>
                    </div>
                </form>
            </div>
            <div class="foot">
                <a href="#">Dear Diary 2023</a>
            </div>
        </div>
    </div>
    </div>
</body>
<script>
//dropdown
       let dropdownId = document.getElementById('drop')
       function toggleMenu(){   
     console.log('1');
     const val =  dropdownId.className
     if(val ==='open-menu')
     dropdownId.className = 'dropdown'
     else
       dropdownId.className = 'open-menu'
     }
    </script>
</html>
+