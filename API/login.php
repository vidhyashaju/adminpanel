<?php
$con=mysqli_connect("localhost","root","","schooldb");
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$data=mysqli_query($con,"SELECT * FROM `login` JOIN register ON login.email=register.email WHERE register.status='Approve' AND login.email='$email' AND login.pwd='$pwd'");
if(mysqli_num_rows($data)>0)
{
    $row=mysqli_fetch_assoc($data);
    $myarray['email']=$row['email'];
}
else
{
    $myarray['message']='failed';
}
echo json_encode($myarray);
?>