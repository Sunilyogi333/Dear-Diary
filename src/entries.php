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
    <link rel="stylesheet" href="entries.css">
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
                        <li><a href="#"><i class="fa fa-caret-down"></i>
                                <?php echo $_SESSION['uname'] ?>
                            </a></li>
                    </ul>
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

                                <td><a id="delete" href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
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
</body>

</html>