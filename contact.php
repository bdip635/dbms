<?php
session_start(); 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "songify(sql).sql";
    $message="";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql="SELECT UserName from user where Email='".$_SESSION['paccount']."'";
    $result = $conn -> query($sql);
    $row = $result -> fetch_row();
    $message=$row[0];
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="style1.css">
    <meta charset="utf-8">
</head>
<body>
    <div class="container">
        <h1>Songify:Discover Your Music</h1>
        <?php
                echo "<h2>WELCOME ".$message."</h2>";
            ?>
        <a href="songify.php">HOME</a>&nbsp;
            <a href="contact.php">Contact</a>&nbsp;
            <form method="POST" action="logout.php" class="logout">
                <input type="submit" value="Log Out" name="logout">
            </form>
        <hr>
    <h2>About Us</h2>
    <p>
    With Songify, it’s easy to find the right music for every moment – on your phone, your computer, your tablet and more.
    There are millions of tracks and episodes on Spotify. So whether you’re behind the wheel, working out, partying or relaxing, the right music or podcast is always at your fingertips. Choose what you want to listen to, or let Spotify surprise you.
    You can also browse through the collections of friends, artists, and celebrities, or create a radio station and just sit back.

    Soundtrack your life with Songify, discover and enjoy!!
    </p>
    <table>
        <tr><td>Dipanshu Barnwal</td><td>181EC212</td></tr>
        <tr><td>Prince Sinha</td><td>181EC133</td></tr>
        <tr><td>Tarun V</td><td>181EC249</td></tr>
        <tr><td>Sai Ritwik</td><td>181EC220</td></tr>
    </table>
    <h3 class="guide">Guided by: Ajay Pratap</h3>
    </div>
    </body>
    </html>