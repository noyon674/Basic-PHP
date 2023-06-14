<?php 
$conn = new mysqli('localhost', 'root', '', 'noyon');


$name_err = $email_err = $pass_err ='';

if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];


    if(empty($userName)){
        $name_err = 'Name field Empty.';
    }
    if(empty($userEmail)){
        $email_err = 'Email field Empty.';
    }
    if(empty($userPass)){
        $pass_err = 'Password field Empty.';
    }
    if(!empty($userName) && !empty($userEmail) && !empty($userPass)){
            $sql  = "INSERT INTO noyon (userName, userEmail, userPass) VALUES ('$userName','$userEmail','$userPass')";

            if($conn->query($sql) == TRUE){
                header('location: login.php');
            }
        }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
</head>
<body style="width: 500px; margin: auto;">
    <form style="margin-top:100px" action=" " method = "POST">
        <label style="margin-top:20px" for="">Name: </label>
        <input type="text" name="userName"><?php echo $name_err?><br>
        <label style="margin-top:20px" for="">Email: </label>
        <input type="text" name="userEmail"><?php echo $email_err?><br>
        <label style="margin-top:20px" for="">Pass: </label>
        <input type="password" name="userPass"><?php echo $pass_err?><br>
        <input type="submit" value = "send" name = "submit">
    </form>
</body>
</html>
