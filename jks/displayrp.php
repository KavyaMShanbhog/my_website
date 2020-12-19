<?php
   require "config.php";
   $query="select * from login_rp";
   $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <!--<link rel="stylesheet" href="style2.css">-->
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>

    table, th, td {
   border: 2px solid black;
   border-collapse:collapse;
  
}
th, td {
  padding: 15px;
  text-align: center;

}
th{
    font-size: 25px;
    background-color: #dddddd;
}
td{
    font-size: 17px;
    font-weight: bold;
}

table {
  border-spacing: 5px;
  position: relative;
  left: 5%;
  top: 20%;
  
}
tr:hover {background-color:#dddddd;}
/*tr:nth-child(even) {background-color:#d6e0f0;}
tr:hover {background-color:#dddddd;}*/
h1{
    text-align: center;
    position: relative;
    left: 5%;

}


    </style>
</head>

<body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Admin<span>Page</span></h3>
      </div>
    </header>
<div class="sidebar">
      <center>
        <img src="" class="profile_image" alt="">
        <h4>ADMIN</h4>
      </center>
      <a href="addrp.php"><i class="far fa-user-circle"></i><span>Create RP Account</span></a>
      <a href="displayrp.php"><i class="fas fa-list"></i><span>List the RP</span></a>
      <a href="displaystu.php"><i class="far fa-registered"></i><span>Registered Students</span></a>
      <a href="display_app.php"><i class="far fa-thumbs-up"></i><span>Approved Students</span></a>
      <a href="display_dis.php"><i class="far fa-thumbs-down"></i><span>Disapproved Students</span></a>
      <a href="course.php"><i class="fas fa-book"></i><span>Courses</span></a>
	  <a href="logout.php"><i class="fas fa-sign-out"></i><span>Logout</span></a>
          </div>
<h1>LIST OF RESOURCE PERSONS</h1>

    <center><table align="center" border="1px">
    <th>First Name 
    </th>
    <th>Last Name </th>
    <th>Email </th>
    <th>Phone Number</th>
    <!--<th>Password</th>-->

    <?php
    while($rows=mysqli_fetch_assoc($result))
    {
    ?>

    <tr>
        <td><?php echo $rows['firstname'];?></td>
        <td><?php echo $rows['lastname'];?></td>
        <td><?php echo $rows['email'];?></td>
        <td><?php echo $rows['phno'];?></td>
        <!--<td><?php echo $rows['password'];?></td>-->
        
        
    </tr>
    <?php
    }
    ?>

    
    </table></center>
    <!--<button><a href="ap.php">Back</a></button>-->
</body>
</html>
