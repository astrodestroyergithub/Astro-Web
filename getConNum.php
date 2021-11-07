<?php
    session_start();
    echo "<!DOCTYPE html>
    <html lang=\"en\">
        <head>
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
            <title>Contact Number Updation Status</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"favicon/apple-touch-icon.png\">
            <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"favicon/favicon-32x32.png\">
            <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"favicon/favicon-16x16.png\">
            <link rel=\"manifest\" href=\"favicon/site.webmanifest\">
        </head>
        <body>";
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'astroweb');
    if($con)
    {
        $email=$_POST['email'];
        $name=$_POST['name'];
        $contact1=$_POST['contact1'];
        $contact2=$_POST['contact2'];
        $contact3=$_POST['contact3'];
        $contact4=$_POST['contact4'];
        $contact5=$_POST['contact5'];
        $query1="select * from contactnum where email='$email';";
        $result1=mysqli_query($con,$query1);
        $num=0;
        $num=mysqli_num_rows($result1);
        if($num==0)
        {
            $query3="insert into contactnum (email,name,contact1,contact2,contact3,contact4,contact5) values ('$email','$name','$contact1','$contact2','$contact3','$contact4','$contact5');";
            $result3=mysqli_query($con,$query3);
            if($result3)
            {
                echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Your contact number(s) have been inserted successfully.</p>";
            }
            else
            {
                echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Your contact number(s) didn't get inserted successfully!</p>";
            }
        }
        if($num==1)
        {
            $query2="update contactnum set name='$name',contact1='$contact1',contact2='$contact2',contact3='$contact3',contact4='$contact4',contact5='$contact5' where email='$email';";
            $result2=mysqli_query($con,$query2);
            if($result2)
            {
                echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Your contact number(s) have been updated successfully.</p>";
            }
            else
            {
                echo "<p style='font-size: 20px; font-family: courier new; font-weight: bold;'>Your contact number(s) didn't get updated successfully!</p>";
            }
        }
    }
    echo "</body></head>";
    mysqli_close($con);
?>