<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'astrodestroyerdatabase');
echo "<html>
<head>
<title>Thanks for Registering</title>
</head>
<body>";
if($con) 
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $space=" ";
    $name="";
    if($mname=="")
    {
        $name=$fname.$space.$lname;
    }
    else
    {
        $name=$fname.$space.$mname.$space.$lname;
    }
    $email=$_POST['emailid'];
    $dob=$_POST['dob'];
    $sex=$_POST['sex'];
    $profession=$_POST['profession'];
    $qualification=$_POST['qualification'];
    $nationality=$_POST['nationality'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $query="insert into registeredusers (name,email,dob,sex,profession,qualification,nationality,address,password) values ('$name','$email','$dob','$sex','$profession','$qualification','$nationality','$address','$password')";
    mysqli_query($con, $query);
    echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Congratulations! You have signed up to the portal successfully...";
}
else
{
    echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Error : Unable to open database\n";
}
echo "</p></body></html>";
mysqli_close($con);
?>