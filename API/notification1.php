<?php
$con=mysqli_connect("localhost","root","","schooldb");
$email=$_POST['email'];
$list=array();
$data=mysqli_query($con,"SELECT * FROM `notification` JOIN register ON notification.reg_id=register.reg_id where register.email='$email'");
if(mysqli_num_rows($data)>0)
{
   while( $row=mysqli_fetch_assoc($data))
   {
    $myarray['notification']=$row['notification'];
    array_push($list,$myarray);
   }
}
else{
    $myarray['message']="failed";
    array_push($list,$myarray);
}
echo json_encode($list);
?>