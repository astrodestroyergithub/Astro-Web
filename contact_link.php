<?php
// contact linking mechanism
$host="localhost";
$user="postgres";
$pass="12345";
$db="astrodatabase";
//echo "<html><head><title>Thank you for contacting...</title></head><body>";
$con=pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to server\n");
if($con) 
{
    $yourname=$_POST['yourname'];
    $youremail=$_POST['youremail'];
    $subject=$_POST['subject'];
    $yourmessage=$_POST['yourmessage'];
    
    $query="insert into contactrequests (name,email,subject,message) values ('$yourname','$youremail','$subject','$yourmessage')";
    $result=pg_query($con,$query);
    echo "Your contact message has been delivered successfully...\n";
}
else
{
    echo "Error : Unable to open database\n";
}
pg_close($con);
?>