<?php
include 'connect.php';
include 'read.php';
include 'config.php';

//retriving data
$users_id = $_SESSION['id'];
$sql = " SELECT * FROM Entries WHERE users_id='$users_id'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entries</title>
    <link rel="stylesheet" href="entries.css?v=<?php $version?>">
    <script src="https://kit.fontawesome.com/5a78363638.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="main">
        <div class="navbar">
            <nav>
                <div class="nav2">
                    <ul>
                        <li><a href="about.php">About</a></li>
                        <li><a href="journals.php">Journals</a></li>
                        <li><a href="#" onclick="toggleMenu()"><i class="fa fa-caret-down"></i>
                                <?php echo $_SESSION['uname'] ?>
                            </a></li>
                    </ul>
                    <div class="open-menu" id="drop" >
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-gear fa-lg"></i>Settings</a></li>
                        <li><a href="#"><i class="fa-regular fa-circle-question fa-lg"></i>help & support</a></li>
                        <li><a href="logout.php" onclick="return logout()"><i class="fa-solid fa-arrow-right-from-bracket fa-lg"></i>logout</a></li>
                        <li><a href="#"><i class="fa-regular fa-comment fa-lg"></i>Feedback</a></li>
                    </ul>
                   </div>
            </nav>
        </div>
        <div class="content">
            <table>
                <caption>Entries</caption>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tbody>
                            <tr>
                                <td><i class="fa-solid fa-file"></i>
                                    <a class="title" href="viewentries.php?etitle=<?php echo $row['etitle']; ?>"><?php echo $row['etitle']; ?></a>
                                </td>

                                <td>
                                    <?php echo $row['reg_time']; ?>
                                </td>

                                <td><a id="delete" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return check();">Delete</a>
                                    <a id="edit" href="viewentries.php?etitle=<?php echo $row['etitle']; ?>">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
    <script>

        function check(){
        let checked = confirm('Are you sure? You will not be able to recover the data.');
        if(checked)
       {
        return true;
       }
       else{
        return false;
       }
       }

       //dropdown
       let dropdownId = document.getElementById('drop')
       console.log('1');
     function toggleMenu(){   
     const val =  dropdownId.className
     if(val ==='open-menu')
     dropdownId.className = 'dropdown'
     else
    dropdownId.className = 'open-menu'
     }
    </script>
</body>

</html>