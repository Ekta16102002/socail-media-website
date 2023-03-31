<?php  
if (isset($_POST['submit'])) {  
    extract($_POST);  
    $servername = "localhost ";  
    $username   = "root";  
    $password   = "";  
    $dbname     = "your db name";  
    // Create connection  
    $conn       = new mysqli($servername, $username, $password, $dbname);  
    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    }  
    $sql = "INSERT INTO `table_name` (fname,uname,lname,address,cno)  
  
VALUES ('$fname','$uname','$lname','$adress','$cno')";  
    if ($conn->query($sql) === TRUE) {  
        header('Location: login.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
    $conn->close();  
}  
?> 