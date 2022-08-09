<?php
$suv=FALSE;
include 'dbcon.php';
$pr='Null';
if($_SERVER['REQUEST_METHOD']=="POST")
{
// $name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];


$sql="SELECT * FROM `own` WHERE phone='$phone' AND email='$email' AND D_of_birth='$dob'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==0)
    {    
        $sql="INSERT INTO `own` (`id`, `Email`, `Phone`, `D_of_birth`, `date_time`) VALUES (NULL, '$email', '$phone', '$dob', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        $suv=TRUE;
        
        
        
        if($result)
        {
            $pr=" Registration Successfull Thank you, $email";
        }
    }else {
        $suv=TRUE;
        $pr=" Alredy Exists ! ";
    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deyenterprise</title>
</head>
<body>
    
</body>
 <?php
  if($suv==TRUE)
  {
    $message="$pr";
 
    echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/hritik_php_project/form/";';
    echo '</script>';
  }
 ?>
 
</html>