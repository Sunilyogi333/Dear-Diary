
<?php
include "connect.php";
include "config.php";
include "read.php";
if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header('location:login.php');
    exit;
}
//retriving entries
if(isset($_GET['etitle'])){
    $etitle=$_GET['etitle'];
    $sql=" SELECT * FROM Entries WHERE etitle='$etitle'
    ";
    $eresult =mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($eresult);
    $id = $row['id'];
  } 

//Edit

if(isset($_POST['save'])){
    $etitle= $_POST['etitle'];
    $entries= $_POST['entries'];
    $users_id=$_SESSION['id'];
    if(!empty($etitle)&&!empty($entries)){
        $sql = "
        UPDATE Entries
        SET etitle ='$etitle', entries='$entries'
        WHERE id ='$id'
        ";
        $result=mysqli_query($conn,$sql);
        header('location:journals.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journals</title>
    <link rel="stylesheet" href="Journals.css?v=<?$version?>">
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
                    <input id="search-bar" type="search" placeholder="Search Journal...">
                    <a class="ajournals" href="journals.php"><i class="fa fa-plus-circle fa-lg"></i>New Journal</a>
                    <a class="ajournals" href="entries.php"><i class="fa fa-th-list fa-lg"></i>View all Entries</a>
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
                        <li><a href="#"><i class="fa fa-caret-down"></i><?php echo $_SESSION['uname'] ?></a></li>
                    </ul>
                    <div class="open-menu" id="drop" >
                    <ul>
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
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="Entries">
                    <div class="eheading">
                        <div class="tahead">
                            <div><i id="idiary" class="fa-solid fa-book fa-xl"></i></div>
                            <div><input id="title" type="text" name="etitle" placeholder="Entry Title"></div>
                        </div>
                        <div id="save">
                            <input class="save" type="submit" name="save" value="Save now" onclick="return savechange()">
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
            
                    <textarea name="entries" id="Entry" placeholder="Start Writing..."></textarea>
                </div>
        </div>
        </form>
    </div>
    <script src="viewentries.js"></script>
    <script>
        document.getElementById('title').value= '<?php echo $etitle; ?>';
        document.getElementById('Entry').innerText='<?php echo $row['entries'];?>';
    </script>
    <script>
    
    </script>
</body>

</html>