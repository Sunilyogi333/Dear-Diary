
<?php
include "connect.php";
include"read.php";
if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header('location:login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journals</title>
    <link rel="stylesheet" href="Journals.css">
    <script src="https://kit.fontawesome.com/5a78363638.js" crossorigin="anonymous"></script>
</head>

<body background="/Dear-Diary/img/Journal_background-Image.jpg">
    <div class="sidebar">
        <nav>
            <div class="nav1">
                <div class="nav1-upperpart">
                    <p><?php echo $_SESSION['uname'] ?>'s Journal</p>
                </div>
                <div class="nav1-lowerpart">
                    <i id="isearch" class="fa-solid fa-magnifying-glass"></i>
                    <input id="search-bar" type="text" placeholder="Search Journal...">
                    <a class="ajournals" href="read.php"><i class="fa fa-plus-circle fa-lg"></i>New Journal</a>
                    <a class="ajournals" href="#"><i class="fa fa-th-list fa-lg"></i>View all Entries</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="main">
        <div class="navbar">
            <nav>
                <div class="nav2">
                    <ul>
                        <li><a href="/Dear-Diary/src/about.php">About</a></li>
                        <li><a href="/Dear-Diary/src/journals.php">Journals</a></li>
                        <li><a href="#"><i class="fa fa-caret-down"></i>Sunil</a></li>
                    </ul>
            </nav>
        </div>
        <div class="content">
            <form>
                <div class="Entries">
                    <div class="eheading">
                        <div class="tahead">
                            <div><i id="idiary" class="fa-solid fa-book fa-xl"></i></div>
                            <div><input id="title" type="text" placeholder="Entry Title"></div>
                        </div>
                        <div id="save">
                            <input class="save" type="submit" name="save" value="Save now">
                        </div>
                    </div>
                    <hr>
                    <div class="current">
                        <div>
                            <span><i id="icalender" class="fa-regular fa-calendar-days fa-lg"></i></span>
                            <span id="date"></span>
                        </div>
                        <div>
                            <span id="time"></span>
                        </div>
                    </div>
                    <hr>
                    <textarea name="Entry" id="Entry" placeholder="Start Writing..."></textarea>
                </div>
        </div>
        </form>
    </div>
    <script src="journals.js"></script>
</body>

</html>