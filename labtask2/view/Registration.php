<?php
include ("../control/process.php");
?>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h1>Registration Form</h1>
<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
    <td>First Name:</td>
<td> <input type="text" name="fname"></td>
</tr>
<tr>
    <td>Last Name:</td>
   <td> <input type="text" name="lname"></td>

</tr>
<tr>
    <td>Age:</td>
    <td> <input type="number" name="age"></td>
<tr>
   <td>Designation:</td>
   <td> <input type="radio" name="post_name" value="Junior Programmer">JuniorProgrammer
   <input type="radio" name="post_name" value="Senior Programmer">Senior Programmer
   <input type="radio" name="post_name" value="Project Lead">Project Lead</td>
</tr>
<tr>
   <td> Preferred language </td>
   <td> <input type="checkbox" name="language1" value="JAVA">JAVA
    <input type="checkbox" name="language2" value="PHP">PHP
    <input type="checkbox" name="language3" value="C++">C++</td>
</tr>
<tr>
    <td>E-mail:</td>
<td> <input type="text" name="ename"></td>
</tr>
<tr>
    <td>Password:</td>
<td> <input type="password" name="pass"></td>
</tr>
<tr>
    <td>Please choose a file:</td>
<td> <input type="file" name="finame"></td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit">
 <input type="submit" name="Reset" value="Reset"></td>
</tr>
</table> 
</form>    
</body>
</html>