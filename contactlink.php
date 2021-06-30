<?php
$host="localhost";
$user="postgres";
$pass="12345";
$db="astrodatabase";
echo "<html>
<head>
<title>Thanks for contacting...</title>
</head>
<body>";
$con=pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server\n");
if($con) 
{
    $yourname=$_POST['yourname'];
    $youremail=$_POST['youremail'];
    $subject=$_POST['subject'];
    $yourmessage=$_POST['yourmessage'];
    
    $query="insert into contactrequests (name,email,subject,message) values ('$yourname','$youremail','$subject','$yourmessage')";
    $result=pg_query($con,$query);
    echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Your contact message has been delivered successfully...</p>";
}
else
{
    echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Error : Unable to open database</p>";
}
echo "</body></html>";
pg_close($con);
?>