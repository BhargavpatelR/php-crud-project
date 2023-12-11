<?php include 'connect.php'; 
//update query logic 
if(isset($_POST['update_btn'])){
 $data_id=$_POST['data_id'];
 $username=$_POST['username'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $address=$_POST['address'];

 $sql="update `table` set username='$username',email='$email',mobile='$mobile',address='$address' where id=$data_id";
 $result=mysqli_query($conn,$sql);
 if($result){
  header('location:display.php');
 }else{
  echo die("Error in updating data");
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Update Data-project</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="main">
     <div class="register">
        <h2>Update Data</h2>
        <a href="display.php" style="color:Tomato">View Data</a>
        <?php
         
         if(isset($_GET['edit'])){
            $edit_id=$_GET['edit'];
            $get_data=mysqli_query($conn,"Select * from `table` where id=$edit_id");
            if(mysqli_num_rows($get_data)>0){
               $fetch_data=mysqli_fetch_assoc($get_data);
               ?>
                <form id="register" method="post" action="">
                 <input type="hidden" name="data_id" value="<?php echo $fetch_data['id'] ?>">
                  Name : <input type="text"  require autocomplete="off" value="<?php echo $fetch_data['username'] ?>" id="name" name="username">
                  <br><br>
                  Email : <input type="email" require autocomplete="off" value="<?php echo $fetch_data['email'] ?>"id="name" name="email">
                  <br><br>
                  Number : <input type="number" require autocomplete="off" value="<?php echo $fetch_data['mobile'] ?>" id="name" name="mobile">
                   <br><br>
                  Address : <input type="text"  require autocomplete="off" value="<?php echo $fetch_data['address'] ?>" id="name" name="address">
                  <br><br>
                  <input type="submit" id="submit" name="update_btn" value="update"> 
                </form>
               <?php
            }
         }
                          
        ?>
        
     </div>
   </div>

</body>
</html>