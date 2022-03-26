<?php
session_start();

include('includes/dbconnection.php');
include('function.php');

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password))
    {
        $query = "select * from userdata where username = '$username' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password']=== $password)
                {
                    $_SESSION['id'] = $user_data['id'];
                    header("Location: userprofile.php");
                    die;
                }
            }
        } 
    }else {
            echo "No user found!";
        }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>

    
    <link rel="stylesheet" href="assets/css/styleh.css">



</head>
<style>
    body{
        background-image: url('/ccms/images/signinbg.jpg');
        background-size: cover;
    }

</style>
<body>

<div class="content" >
    
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h1 style="color: yellow" align="center" >Cyber Cafe Management System </h1>
                    <hr  color="red"/>
                </div>
                <div class="login-option">
                    <center> 
                    <a href="/ccms/userlogin.php"><button class="user-button" >User Login</button></a>
                    <a href="/ccms/index.php"><button class="user-button" >Admin Login</button></a>
                    </center><br>
                </div>
                <br>
                <div class="user-logform">
                    <form action="" method="POST" name="login"> 
                        <h2 style="font-size:25px; color:blue" align="center"> 
                        User Login</h2>

                        <div class="form-group">
                            <label>User Name</label><br>
                            <input type="text" class="form-control" placeholder="Enter User Name" required="true" name="username">
                        </div>
                            <div class="form-group">
                                <label>Password</label><br>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password" required="true">
                        </div>
                                <div class="checkbox">
                                    New? <a href="/ccms/signup.php" style="color:#ff7200">Sign up</a>
                                    

                                </div>
                                <button type="submit" class="user-button" name="log_in">Sign in</button>
                                
                            
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>