<html>
    <head>
        <title>Display Details</title></head>
    <body>
        <h1>
            <table border="2" style="width:40%; float:center;">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Operations</th>
            </tr>






<?php

// creating the database connection
// Connection = ('localhost','databaseuser','databasepassword','databasename')
$con= mysqli_connect('localhost', 'root','','db_form');
if($con){
    echo "<b>Connection was successful<b>";
    echo "<br></br>";
}else{
    echo "sorry Connection Failed!".mysqli_error();
}

$sql = "SELECT * FROM `table_form`";
$result = mysqli_query($con, $sql);
?>

<?php
// find the number of rocords returned
$num = mysqli_num_rows($result);
echo $num;
echo "<b>Records found in the DataBase</b><br></br>";

// Display the rows returned by the sql query
if($num>0){
    while($row = mysqli_fetch_array($result)){
    echo "
    <tr>
    <th>".$row['Name']."</th>
    <th>".$row['Email']."</th>
    <th>".$row['Password']."</th>
    <th>".$row['Phone']."</th>
    <td><a href = 'edit.php?Name=$row[Name]&Email=$row[Email]&Password=$row[Password]&Phone=$row[Phone]' ><input type='submit' value='Edit/Update'></td>
    </tr>
    ";
    }
        
}
?>
</table>
</body>
</html>
