<?php
$con=mysqli_connect("localhost","root","","schooldb");
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$status=$_POST['status'];
$data=mysqli_query($con,"INSERT INTO `register`(`fullname`, `email`,`status`) VALUES ('$fullname','$email','$status')");
$data=mysqli_query($con,"INSERT INTO `login`(`email`, `pwd`, `type`) VALUES ('$email','$pwd','admin')");
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
