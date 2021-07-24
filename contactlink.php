<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'astrodestroyerdatabase');
echo "<html>
<head>
<title>Thanks for Contacting</title>
</head>
<body>";
if($con) 
{
    $yourname=$_POST['yourname'];
    $youremail=$_POST['youremail'];
    $subject=$_POST['subject'];
    $yourmessage=$_POST['yourmessage'];
    $query="insert into contactrequests (name,email,subject,message) values ('$yourname','$youremail','$subject','$yourmessage')";
    mysqli_query($con, $query);
    echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Your contact message has been delivered successfully...</p>";
}
else
{
    echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Error : Unable to open database</p>";
}
echo "</body></html>";
mysqli_close($con);
?>