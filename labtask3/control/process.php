<?php
$passworderror="";
if(isset($_REQUEST["submit"]))
{ 
$name=$_REQUEST["fname"];
if(empty($name))
{
    echo "your first name should not be empty";
}
else{
    echo "your name is ".$name;
}
$name=$_REQUEST["lname"];
if(empty($name))
{
    echo "<br>your last name should not be empty";
}
else{
    echo " ".$name;
}
if(strlen($_REQUEST["pass"])<5)
{
    $passworderror= "password can not be less than 5 word";
}
if(isset($_REQUEST["post_name"]))
{
    $post_name=$_REQUEST["post_name"];
    echo "<br>You Post Name is: ". $post_name;
}
else{
    echo "<br> your post name should not be empty";
}
if(isset($_REQUEST["language1"])||isset($_REQUEST["language2"])||isset($_REQUEST["language3"])){
    if(isset($_REQUEST["language1"])&& isset($_REQUEST["language2"]) && isset($_REQUEST["language3"]))
    {
      echo "<br> You have selected all: ".$_REQUEST["language1"]. "and" . $_REQUEST["language2"]. "and" . $_REQUEST["language3"];
    }
    else if(isset($_REQUEST["language1"])&&isset($_REQUEST["language2"])){
        echo "<br> you have selected 1 and 2: ".$_REQUEST["language1"]. "and" . $_REQUEST["language2"];
    }
    else if(isset($_REQUEST["language2"])&&isset($_REQUEST["language3"])){
        echo "<br> you have selected 2 and 3: ".$_REQUEST["language2"]. "and" . $_REQUEST["language3"];
    }
     else if(isset($_REQUEST["language1"])&&isset($_REQUEST["language3"])){
        echo "<br> you have selected 1 and 3".$_REQUEST["language1"]. "and" . $_REQUEST["language3"];
    }
    else if(isset($_REQUEST["language1"])){
        echo "<br> you have selected: ".$_REQUEST["language1"];
    }
    else if(isset($_REQUEST["language2"])){
        echo "<br> you have selected: ".$_REQUEST["language2"];
    }
    else if(isset($_REQUEST["language3"])){
        echo "<br> you have selected3: " . $_REQUEST["language3"];
    }

     
}
else
{
    echo "<br> your language name should not be empty";
}
$email=$_REQUEST["ename"];
if(empty($email))
{
    echo "<br>email should not be empty";
}
else{
    echo "<br>your email is: ".$email;
}
echo $_FILES["finame"]["name"];
move_uploaded_file($_FILES["finame"]["tmp_name"],"../uploads/".$_FILES["finame"]["name"]);

$mydata = array( 
    'firstname'=>$_REQUEST["fname"],
    'lastname'=>$_REQUEST["lname"],
    'email'=>$_REQUEST["ename"],
    'password'=>$_REQUEST["pass"],
    'file'=>$_FILES["finame"]["name"]

);
$jsondata=json_encode($mydata,JSON_PRETTY_PRINT);
if(file_put_contents("../data/data.json",$jsondata))
{
    echo "<br>Data Saved";
}

echo "<br>";

}
?>