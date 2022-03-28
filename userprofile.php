<?php
session_start();

include("includes/dbconnection.php");
include("function.php");

$user_id = $_SESSION['id'];
$query = "SELECT fullname, username, branch, date FROM userdata where id = $user_id";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel= "stylesheet" href="assets/css/styleh.css">
    <link rel= "stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstap.min.css">
</head>
<body>
    <div class="contnr">
        <div class="mn">
            <div class="topbar">
                <h1>Profile</h1>
                <a href="/ccms/userlogin.php">Log out</a>
                <a href="/ccms/booking.php">Book</a>
                
            </div>

            <!-- Side navigation -->
            <div class="sidenav">
            <div class="icon">
                <h2 class="logo">Cyber Cafe</h2>
            </div><br><br><br><br>
                <a href="/ccms/homepage.php">Home</a>
                <a href="/ccms/aboutus.php">About</a>
                <a href="/ccms/homepage.php#service">Services</a>
                <a href="/ccms/userlogin.php">Log Out</a>
            </div>

<!-- Page content -->
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($user_data = mysqli_fetch_assoc($result)) {
 ?>
            <div class="usermn">
                <div class="hd">
                    Welcome
                </div>
                <br>
                <div class="user-box">
                    Name: <?php echo $user_data['fullname']; ?> 
                    <br>UserName: <?php echo $user_data['username']; ?> 
                    <br>Branch: <?php echo $user_data['branch']; ?> 
                    <br>Time: <?php echo $user_data['date']; ?> 
                    <br>Fees: 120 RS. per Hour

                </div>
            </div>
<?php
  $sn++;}} ?>            
        </div>
    </div>
</body>
</html>