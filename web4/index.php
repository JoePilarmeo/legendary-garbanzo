<?php
// set cookies
if(isset($_POST['submit'])){
if(empty($_POST['username']) && empty($_POST['password'])){
    echo 
    ' <div class="invalid_input" style="background-color: #FFBDBD; color:#7E0000; text-align: center; width: 465px; 
    padding:6px; margin-bottom: 10px; border:solid 1px; border-radius: 5px">
    Please input your valid username and password </div>';

}
else {
    $username = htmlentities($_POST['username']);

    setcookie('username', $username, time()+3600);

    header('Location: loggedin.php');
}
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" name="submit" value="Log Me In">
    </form>
</body>
</html>