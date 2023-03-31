<?php
$Firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email = $_POST['email'];
$inlineRadioOptions = $_POST['inlineRadioOptions'];
$sel = $_POST['sel'];
$pwd = $_POST['pwd'];

$conn = new mysqli('localhost' , 'root', '', 'form');
if($conn->connect_error){
  die('connection failed:' .$conn->connect_error); 
}else{
  $stmt-$conn->prepare("insert into login(Firstname,lastname,email,inlineRadioOptions,sel,pwd)
  values(?,?,?,?,?,?)");
  $stmt->bind_param("sssssi",$Firstname,$lastname,$email,$inlineRadioOptions,$sel,$pwd);
  $stmt->execute();
  echo "done!";
  $stmt->close();
  $conn->close();
}
?>