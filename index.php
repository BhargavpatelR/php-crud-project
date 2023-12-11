<?php include 'connect.php';

//inserting data inside table
if(isset($_POST['submit'])){
   //echo "success";
   $username=$_POST['username'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $address=$_POST['address'];

   //insert Query
   $sql="insert into `table` (username,email,	mobile,address) values('$username','$email','$mobile','$address')";
   $result=mysqli_query($conn,$sql);
   if($result){
    header('location:display.php');
   }else{
    echo die("Data not inserted");
   }
}

?>             

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Registration Form</title>
 <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
   <div class="main">
     <div class="register">
        <h2>PHP CRUD</h2>
        <a href="display.php" style="color:Tomato">View Data</a>
        <form id="register" method="post" action="">
        
        Name : <input type="text" placeholder="Enter your name" require autocomplete="off"  id="name" name="username">
        <br><br>
        Email : <input type="email" placeholder="Enter your email" require autocomplete="off" id="name" name="email">
        <br><br>
        Number : <input type="number" placeholder="Enter your mobile number" require autocomplete="off" id="name" name="mobile">
        <br><br>
        Address : <input type="text" placeholder="Enter your address" require autocomplete="off" id="name" name="address">
        <br><br>
        <input type="submit" id="submit" name="submit">
        </form>
     </div>
   </div>
</body>
</html>