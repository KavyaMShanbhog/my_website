<?php
   require "config.php";
   $query="select * from disapprove";
   $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
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
    font-size: 20px;
}
td{
    font-size: 17px;
    font-weight: bold;
}

table {
  border-spacing: 5px;
  position: relative;
  left: 10%;
  top: 5%;
  
}
tr:hover {background-color:#dddddd;}
/*tr:nth-child(even) {background-color:#d6e0f0;}
tr:hover {background-color:#dddddd;}*/
h1{
    text-align: center;
    position: relative;
    left: 5%;

}
.b1{
    width: 100%;
    padding: 0.7rem;
    background-color: green;
    border: none;
    border-radius: 6px;
    color: black;
    font-size:medium;
    text-align: center;
}
a{
    color: black;
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
<h1>List of Disapproved Students</h1>

    <table align="center" border="1px">
    <th>First Name 
    </th>
    <th>Last Name </th>
    <th>Email </th>
    <th>Phone Number</th>
    <th>Password</th>
    <th>Approve</th>

    <?php
                            
                            while($row=mysqli_fetch_assoc($result))
                            {
                            echo '<tr>
                                        
                                        <td>'.$row['firstname'].'
                                        <td>'.$row['lastname'].'
                                        <td>'.$row['email'].'
                                        <td>'.$row['phno'].'
                                        <td>'.$row['password'];
                
                                         
                                    echo '<td><button class="b1"><strong><a href="process_app_dis.php?sid='.$row['phno'].'">Approve</a></strong></button>
                                    
                                    
                                                
                                </tr>';
                                    
                            }
                        ?>
    ?>

    
    </table>
    <button><a href="ap.php">Back</a></button>
</body>
</html>
