<?php 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-brand">
            <h2>SewaMobil</h2>
        </div>
        <div class="navbar-item">
            <ul>
                <li>
                    <a href="">Home</a>
                    <a href="">Contact</a>
                    <a href="">About</a>
                </li>
            </ul>
        </div>
        <div class="nav-login">
            <a href="logout.php">logout</a>
        </div>
    </div>
    <?php 
include '../config/koneksi.php';
?>
        <table border="1">
            <tr>
                <td>id</td>
                <td>username</td>
                <td>email</td>
                <td>Aksi</td>                
                
            </tr>            
             <?php
                include "../config/koneksi.php";
                $no = 1;
                $query = mysqli_query($conn, 'SELECT * FROM users');                                
                
                $result = array(); 
                while ($data = mysqli_fetch_array($query)) {
                $result[] = $data; //result dijadikan array 
                }                
                //selanjutnya result array di foreach
                foreach ($result as $value){                                
                ?>    
            <tr>
                <td><?php  echo $value['id']?></td>                
                <td><?php  echo $value['username']?></td>                
                <td><?php  echo $value['email']?></td>
                echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
            </tr>  
            
                <?php } ?>
        </table>        
</body>
</html>