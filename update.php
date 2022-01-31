<?php

// creating the database connection
// Connection = ('localhost','databaseuser','databasepassword','databasename')
$con= mysqli_connect('localhost', 'root','','db_form');

if($_POST)
{
    $Name= $_POST['Name'];
    $Email= $_POST['Email'];
    $Phone= $_POST['Phone'];


$sql= "UPDATE table_form SET Name='$Name', Email='$Email',Phone='$Phone' WHERE Name ='$Name'";

$result= mysqli_query($con,$sql);

if($result)
{
    echo "Record Updated";
}
else{
    echo "failed to update Record";
}
}

?>