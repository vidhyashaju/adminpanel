<?php
$con=mysqli_connect("localhost","root","","schooldb");
$fullname=$_POST['fullname'];
$emailold=$_POST['emailold'];
$emailnew=$_POST['emailnew'];
$pwd=$_POST['pwd'];
$status=$_POST['status'];
$type=$_POST['type'];
$data=mysqli_query($con,"UPDATE `register` SET `fullname`='$fullname',`email`='$emailnew' WHERE email='$emailold'");
$data=mysqli_query($con,"UPDATE `login` SET `email`='$emailnew',`pwd`='$pwd',`type`='$type' WHERE email='$emailold'");
if($data)
{
    $myarray['message']='success';
}
else
{
    $myarray['message']='failed';
}
echo json_encode($myarray);
?>
