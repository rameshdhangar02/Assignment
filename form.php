<html>
    <head></head>
    <title>Registration Form</title>
    <body>
    <form action = 'database.php' method= "POST">
    <center><div style= "table">
        <h1>Registration Form</h1><br></br>
            <th><label><b>Name</b></label></th>
            <tr><td><input type = "text" name = "Name" id= "Name" required></tr></td><br></br>
            <th><label><b>Email</b></label></th>
            <tr><td><input type = "email" name = "Email" id= "Email" required></tr></td><br></br>
            <th><label><b>Password</b></label></th>
            <tr><td><input type = "password" name = "Password" id= "Password" required></tr></td><br></br>
            <th><label><b>Phone</b></label></th>
            <tr><td><input type = "text" name = "Phone" id= "Phone" required></tr></td><br></br>

            <input type= "submit" value= "Submit"> <input type= "reset" value= "Reset"></div></center>
</form>  
</body>
</html>