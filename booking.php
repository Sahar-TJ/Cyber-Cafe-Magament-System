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
    $branch = $_POST['branch'];
    $date= $_POST['Calender'];

    if(!empty($username) && !empty($password) && !empty($fullname) && !empty($branch) && !empty($date))
    {

        //save to database

        $query = "update userdata set branch = '$branch' , date = '$date' where username = '$username' ";

        mysqli_query($con, $query);

        header("Location: userprofile.php");
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
    <title>Book</title>
    <link rel= "stylesheet" href="assets/css/styleh.css">
</head>
<style>
    body{
        background-image: url('/ccms/images/bookbg.jpg');
        background-size: cover;
    }

</style>
<body>
    
<div class="book-content" >
    
    <div class="contain">
        
            <div class="book-logo">
                <h1>Cyber Cafe Management System </h1>
                <hr  color="red"/>
            </div>
            
            <br>
            <div class="book-form">
                <form action="" method="post" name="login"> 
                    <h2 style="font-size:25px; color:orange" align="center"> 
                    Book</h2>

                    <div class="form-group">
                        <label class="label">Full Name</label><br>
                        <input type="text" class="form-control" placeholder="Enter Full Name" required="true" name="fullname">
                    </div>

                    <div class="form-group">
                        <label class="label">User Name & Password</label><br>
                        <div class="book-form-group">
                        <input type="text" class="user-form-control" placeholder="Enter User Name" required="true" name="username" width="50%">
                        <input type="password" class="user-form-control" placeholder="Enter Password" required="true" name="password" width="50%">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="label">Branch</label><br>
                        <input type="text" class="form-control" placeholder="Enter branch" name="branch" required="true">
                    </div>

                    <div class="form-group">
                        <label class="label">Date and Time</label><br>
                        <input class="cal" type="datetime-local" name="Calender" placeholder="Enter Date & Time" required="true">
                    </div>

                            
                    <button type="submit" class="book-button" name="book-signup"><a href="/ccms/userprofile.php">Book</a></button>
                            
                        
                </form>
            </div>
        
    </div>
</div>


</body>
</html>