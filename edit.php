<?php
// database connection
$con= mysqli_connect('localhost', 'root','','db_form');

$Name= $_GET['Name'];
$Email= $_GET['Email'];
$Phone= $_GET['Phone'];

?>

<html>
    <head></head>
    <title>Registration Form</title>
    <body>
    <form action = 'update.php' method= "POST">
        <div style= "table">
        <h1><center>Edit Form</center></h1><br></br>
            <center><th><label><b>Name</b></label></th>
            <tr><td><input type = "text" name = "Name" id= "Name" value= "<?php echo "$Name" ?>" required></tr></td><br></br>
            <th><label><b>Email</b></label></th>
            <tr><td><input type = "email" name = "Email" id= "Email" value= "<?php echo "$Email" ?>" required></tr></td><br></br>
            <th><label><b>Phone</b></label></th>
            <tr><td><input type = "text" name = "Phone" id= "Phone" value= "<?php echo "$Phone" ?>" required></tr></td></center><br></br>

            <center><input type= "submit" value= "Get Details"> </center>
</form>
</body>
</html>

<?php

$sql= "UPDATE table_form SET Name='$Name', Email='$Email',Phone='$Phone' WHERE Name ='$Name'";

$result= mysqli_query($con,$sql);

if($result)
{
    echo "";
}
else{
    echo "failed to update Record";
}

?>