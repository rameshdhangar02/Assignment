<?php

// creating the database connection
// Connection = ('localhost','databaseuser','databasepassword','databasename')
$con= mysqli_connect('localhost', 'root','','db_form');
if($con){
    echo "<b>Connection was successful<b>";
    echo "<br></br>";
}else{
    echo "sorry Connection Failed!";
}

// get the post records
$Name= $_POST['Name'];
$Email= $_POST['Email'];
$Password= $_POST['Password'];
$Phone= $_POST['Phone'];

if(isset($_POST['Submit'])){
    $Name = mysqli_real_escape_string($con, $_POST['Name']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);
    $Phone = mysqli_real_escape_string($con, $_POST['Phone']);
    
}


// database insert sql code
$sql= "INSERT INTO `table_form` (`ID`, `Name`, `Email`, `Password`, `Phone`) VALUES ('0', '$Name', '$Email', '$Password', '$Phone')";
// Insert in database
$result= mysqli_query($con,$sql);

if($result){
    echo "<b>Form Records Inserted<b>";
    echo "<br>";
}
?>

<form action= "view.php" method= "POST"></br>
<input type= "submit" name= "Submit" value= "Get Details">
</form>
