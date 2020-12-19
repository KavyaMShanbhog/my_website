<?php
      session_start();
      require "config.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name= "viewport" content="width=device-width,initial-scale=1.0">
        <title>ADD RP</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <h3><strong>ADD RESOURCE PERSON </h3></strong>
        
            
            <form action="addrp.php" method="post">
                <input type="text" name="firstname" placeholder="First Name" required><br><br>
                <input type="text" name="lastname" placeholder="Last Name" required><br><br>
                <input type="text" name="email" placeholder="Email" required><br><br>
                <input type="text" name="phno" placeholder="Phone Number" required><br><br>
                <input type="password" name="password" placeholder="Password" required><br><br>

                

                <a href="#">  <button name="add_button" type="submit" id="login_btn"><strong>ADD</strong></button></a>
                <button><a href="ap.php">Back</a></button> 
             <!--<a href=""><input name="login_admin" type="submit" id="login_btn" value="Log In"></a><br>-->
             </form>
        </div>

          <?php
    if(isset($_POST['add_button']))
    {
        $firstname =$_POST['firstname'];
         $lastname =$_POST['lastname'];
         $email =$_POST['email'];
         $phno =$_POST['phno'];
         $password =$_POST['password'];
         
         
         
            $query="select * from login_rp WHERE phno='$phno' ";
            $query_run =mysqli_query($con,$query);
            
            if(mysqli_num_rows($query_run)>0)
            {
                //there is already a user with the same username
                echo '<script type="text/javascript"> alert("User already exists... try another username") </script>';
            }
            else
            {
                $query="insert into login_rp values('$firstname','$lastname','$email','$phno','$password')";
                $query_run=mysqli_query($con,$query);
                
                if($query_run)
                {
                    echo '<script type="text/javascript"> alert("User Registered... Go to login page") </script>';
                }
                else
                {
                    echo '<script type="text/javascript"> alert("Error!") </script>';
                }
            }
         
        
         
    }
  ?>
    </body>
</html>