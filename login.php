<?php
 header("Location: index.php"); 
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'amader_shop';

$con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS, $DATABASE_NAME);

if(isset($_POST['username']))
{
    $uname=$_POST['username'];
    $password= $_POST['password'];

    $sql="select * from form where username='" .$uname."' AND password='" .$password."'
    limit 1 ";

    $result = mysqli_query($sql);

    if(mysql_num_rows($result)==1)
    {
        echo "Succesfull";
        exit();
    }
    else
    {
        echo "Incorrect";
        exit();
    }
}

?>
<!DOCTYPE html>
<html>
    <head></head>

    <body>
        <div class="container">
            <form>
                <form action="#" method="post">
                    <label for="username"></label>
                    <input type="text" name="username" placeholder="Username" id="username" required>
                    
                    <label for="password"></label>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    
    
                    <input type="Submit" name="submit" value="LOGIN" class="btn-login">
                </form>
            </form>
        </div>
    </body>
</html>