<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h1>Registration Form</h1>
<form action="../control/process.php" method="post">
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
   <td> <input type="radio" name="post_name" value="Junior Programmer">JuniorProgrammer</td>
   <td><input type="radio" name="post_name" value="Senior Programmer">Senior Programmer</td>
   <td><input type="radio" name="post_name" value="Project Lead">Project Lead</td>
</tr>
<tr>
   <td> Preferred language </td>
   <td> <input type="checkbox" name="language" value="JAVA">JAVA</td>
   <td> <input type="checkbox" name="language" value="PHP">PHP</td>
   <td> <input type="checkbox" name="language" value="C++">C++</td>
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