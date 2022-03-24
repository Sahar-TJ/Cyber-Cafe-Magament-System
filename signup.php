<?php
session_start();

include("includes/dbconnection.php");
include("function.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];

    if(!empty($username) && !empty($password) && !empty($fullname))
    {

        //save to database
        $user_id = random_num(20);
        $query = "insert into userdata (user_id,fullname,username,password) values ('$user_id','$fullname','$username','$password')";

        mysqli_query($con, $query);

        header("Location: userlogin.php");
        die;
    }else
    {
        echo "Please enter some valid information!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <link rel="stylesheet" href="assets/css/styleh.css">

</head>
<style>
    body{
        background-image: url('/ccms/images/signupbg.jpg');
        background-size: cover;
    }

</style>
<body>
<div class="sign-content" >
    
    <div class="container">
        
            <div class="sign-logo">
                <h1>Cyber Cafe Management System </h1>
                <hr  color="red"/>
            </div>
            
            <br>
            <div class="sign-logform">
                <form action="" method="POST" name="login"> 
                    <h2 style="font-size:25px; color:blue" align="center"> 
                    Sign Up</h2>

                    <div class="form-group">
                        <label class="label">Full Name</label><br>
                        <input type="text" class="form-control" placeholder="Enter Full Name" required="true" name="fullname">
                    </div>

                    <div class="form-group">
                        <label class="label">User Name</label><br>
                        <input type="text" class="form-control" placeholder="Enter User Name" required="true" name="username">
                    </div>
                    <div class="form-group">
                        <label class="label">Password</label><br>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" required="true">
                    </div>
                            <div class="checkbox">
                                Already a User? <a href="/ccms/userlogin.php" style="color:#ff7200">Sign in</a>
                                
                            </div>
                            <button type="submit" class="user-button" name="signup">Sign up</button>
                            
                        
                </form>
            </div>
        
    </div>
</div>

</body>
</html>