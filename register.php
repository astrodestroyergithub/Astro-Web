<?php
$host="localhost";
$user="postgres";
$pass="12345";
$db="astrodatabase";
$con=pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server\n");
echo "<html>
<head>
<title>Thanks for contacting...</title>
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
    $result=pg_query($con,$query);
    echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Congratulations! You have signed up to the portal successfully...";
}
else
{
    echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Error : Unable to open database\n";
}
echo "</p></body></html>";
pg_close($con);
?>