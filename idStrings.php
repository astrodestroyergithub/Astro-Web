<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Update Identification Strings</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
    </head>
    <body style="background-image: url('images/156340.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
        <div class="topnav">
            <a class="active" href="index.html">Home</a>
            <a href="signup.html">Sign up</a>
            <a href="login.html">Login</a>
            <a href="blog.html">Blog</a>
            <a href="contact.html">Contact</a>
            <a href="about.html">About</a>
        </div>
        <div class="login">
            <form action="getIdString.php" method="post">
                <table>
                    <tr>
                        <td colspan=20><div class="log-head"><center>Update Your Identification Strings</center></div></td>
                    </tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr>
                    <tr>
                        <td><label for="email"><b>Email-ID</b></label></td>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        <td><input type="text" id="email" name="email" value="<?php echo $_SESSION['email'] ?>" size=30>
                    </tr>
                    <tr>
                        <td><label for="name"><b>Name</b></label></td>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        <td><input type="text" id="name" name="name" value="<?php echo $_SESSION['name'] ?>" size=30>
                    </tr>
                    <tr>
                        <td><label for="idstring1"><b>ID String 1</b></label></td>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        <td><input type="text" id="idstring1" name="idstring1" placeholder="ID String 1" size=30>
                    </tr>
                    <tr>
                        <td><label for="idstring2"><b>ID String 2</b></label></td>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        <td><input type="text" id="idstring2" name="idstring2" placeholder="ID String 2" size=30>
                    </tr>
                    <tr>
                        <td><label for="idstring3"><b>ID String 3</b></label></td>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        <td><input type="text" id="idstring3" name="idstring3" placeholder="ID String 3" size=30>
                    </tr>
                    <tr>
                        <td><label for="idstring4"><b>ID String 4</b></label></td>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        <td><input type="text" id="idstring4" name="idstring4" placeholder="ID String 4" size=30>
                    </tr>
                    <tr>
                        <td><label for="idstring5"><b>ID String 5</b></label></td>
                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                        <td><input type="text" id="idstring5" name="idstring5" placeholder="ID String 5" size=30>
                    </tr>
                    <tr></tr><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
                    <tr>
                        <td colspan=6><p style="float:right;"><input type="submit" value="Update"></p></td>
                        <td colspan=6><p style="float:left;"><input type="reset" value="Reset"></p></td>
                    </tr>
                </table>
            </form>
        </div>
        <footer>
            <p style="text-align:center; background-color: black; color:white; font-family: verdana; font-size: 15px; padding: 9px; width: 100%; position: absolute; bottom: -2%; padding: 20px;">Copyright &copy; 2021 AstroDestroyer146.</p>
        </footer>
    </body>
</html>