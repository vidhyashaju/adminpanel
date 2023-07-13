<?php
$con=mysqli_connect("localhost","root","","schooldb");
$feedback=$_POST['feedback'];
$feeddate=date("Y/m/d");
$email=$_POST['email'];
$data=mysqli_query($con,"INSERT INTO `feedback`(`feedback`, `date`, `email`) VALUES ('$feedback','$feeddate','$email')");
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