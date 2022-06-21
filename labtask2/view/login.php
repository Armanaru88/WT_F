<?php
include ("../control/login_control.php");
?>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login Form</h1>
<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
    <td>Name:</td>
<td> <input type="text" name="name"></td>
</tr>
<tr>
    <td>Password:</td>
<td> <input type="password" name="pass"></td>
</tr>
<tr>
<td> <input type="submit" name="Login" value="Login"></td>
</tr>
</table>   
</body>
</html>