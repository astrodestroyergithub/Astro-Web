<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'astroweb');
echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
        <title>Login Check</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"favicon/apple-touch-icon.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon/favicon-32x32.png\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"favicon/favicon-16x16.png\">
        <link rel=\"manifest\" href=\"favicon/site.webmanifest\">
    </head>
    <body>";
$temp=0;
if($con)
{
    $email=$_POST['username'];
    $password=$_POST['password'];
    $query1="select * from regusers where email='$email' and password='$password';";
    $result1=mysqli_query($con,$query1);
    $num=mysqli_num_rows($result1);
    if($num==1)
    {
        while($row=$result1->fetch_assoc())
        {
            $_SESSION['name']=$row['name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['dob']=$row['dob'];
            $_SESSION['sex']=$row['sex'];
            $_SESSION['profession']=$row['profession'];
            $_SESSION['qualification']=$row['qualification'];
            $_SESSION['nationality']=$row['nationality'];
            $_SESSION['address']=$row['address'];
            $_SESSION['password']=$row['password'];
            $temp=1;
        }
        echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Welcome! You have successfully logged in as - ". $_SESSION['name'].".\n</p>";
    }
    else
    {
        echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Sorry! Either your record doesn't exist OR you entered invalid credentials! Try Again.</p>";
    }
    if($temp==1)
    {
        echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>".$_SESSION['name']."</p>";
        echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Select the Module which you want to proceed with\n</p>";
        echo "<div class='mod'>
                <span class='inner-mod'>
                    <a href='conNum.php'><button style='padding-left:25px;padding-right:25px;'><p style='font-size: 20px; font-family: helvetica; font-weight: bold;'>Update Contact Number</p></button></a><br><br>
                    <a href='othDetails.html'><button style='padding-left:40px;padding-right:40px;'><p style='font-size: 20px; font-family: helvetica; font-weight: bold;'>Update Other Details</p></button></a><br><br>
                    <a href='tellInterests.html'><button style='padding-left:55px;padding-right:55px;'><p style='font-size: 20px; font-family: helvetica; font-weight: bold;'>Tell Your Interests</p></button></a><br><br>
                    <a href='secInfo.html'><button style='padding-left:50px;padding-right:50px;'><p style='font-size: 20px; font-family: helvetica; font-weight: bold;'>Secret Information</p></button></a><br><br>
                    <a href='idStrings.php'><button style='padding-left:40px;padding-right:40px;'><p style='font-size: 20px; font-family: helvetica; font-weight: bold;'>Identification Strings</p></button></a><br><br>
                    <a href='medHandles.php'><button style='padding-left:40px;padding-right:40px;'><p style='font-size: 20px; font-family: helvetica; font-weight: bold;'>Update Social Media Handles</p></button></a><br><br>
                </span>
            </div>";
    }
    echo "</body></html>";
}
mysqli_close($con);
?>