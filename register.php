<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'astroweb');
echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
        <title>Register Status</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"favicon/apple-touch-icon.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"favicon/favicon-16x16.png\">
        <link rel=\"manifest\" href=\"favicon/site.webmanifest\">
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
    $query1="select * from regusers where email='$email'";
    $result1=mysqli_query($con,$query1);
    $num=mysqli_num_rows($result1);
    if($num==1)
    {
        echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>User having the same E-Mail Address already exists!</p><br>";
        $query2="update regusers set name='$name',dob='$dob',sex='$sex',profession='$profession',qualification='$qualification',nationality='$nationality',address='$address',password='$password' where email='$email';";
        mysqli_query($con,$query2);
        echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>The Registered User details have been updated.</p><br>";
    }
    else
    {
        $query3="insert into regusers (name,email,dob,sex,profession,qualification,nationality,address,password) values ('$name','$email','$dob','$sex','$profession','$qualification','$nationality','$address','$password')";
        mysqli_query($con, $query3);
        echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Congratulations! You have signed up to the portal successfully.";
    }
}
else
{
    echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Error : Unable to open database\n</p>";
}
echo "</body></html>";
mysqli_close($con);
?>