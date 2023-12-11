<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Display Data-project</title>
 <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<div class="main">

       <h2>Display Data</h2>
       <a href="index.php" style="color:Tomato">Back</a>
      

       <?php
       $display_data=mysqli_query($conn,"Select * from `table`");
       $num=1;
       if(mysqli_num_rows($display_data)>0){
          echo  "<table>
          <thead>
           <th>Sl No</th>
           <th>Username</th>
           <th>Email</th>
           <th>Mobile No</th>
           <th>Address</th>
           <th>Oprations</th>
          </thead>
          <tbody>";
          while($row=mysqli_fetch_assoc($display_data)){
        ?>
 
           <tr>
             <td><?php echo $num;?></td>
             <td><?php echo $row['username'] ?></td>
             <td><?php echo $row['email'] ?></td>
             <td><?php echo $row['mobile'] ?></td>
             <td><?php echo $row['address'] ?></td>
             <td>
              <a style="color:Tomato" href="delete.php?delete=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want delete this data');">Delete</a>
              <a style="color:Tomato" href="update.php?edit=<?php echo $row['id'] ?>" >Edit</a>
             </td>
           </tr>

       <?php
       $num++;
          }
       }else{
         echo "<div> No Data </div>";
       }
       
       ?>

      
           
          </tbody>
       </table>
 </div>
</body>
</html>