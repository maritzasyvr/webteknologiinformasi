<?php 
session_start();
if(!isset($_SESSION['simple_login']))
{
    header("Location:login.php");
}
?>
<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="logout.php">Logout</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Email</th> <th>Subject</th> <th>Message</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['email']."</td>";  
        echo "<td>".$user_data['subject']."</td>"; 
        echo "<td>".$user_data['message']."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>