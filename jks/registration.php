<?php
   require "config.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name= "viewport" content="width=device-width,initial-scale=1.0">
        <title>SIGN UP</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <h3><strong>STUDENT SIGN UP</h3></strong>
        
            
            <form action="registration.php" method="post">
                <input name="firstname" type="text" placeholder="First Name"><br><br>
                <input name="lastname" type="text" placeholder="Last Name"><br><br>
                <input name="email" type="text"  pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" placeholder="Email"><br><br>
                <input name="phno" type="tel" pattern="^\d{10}$" placeholder="Phone Number"><br><br>
                
                <input name="password" type="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])(?=.*[!@#$%^&*?/\]).{8,}$"placeholder="Password"><br><br>
                <input name="rpassword" type="password" placeholder="Retype Password"><br><br>
                <a href="#">  <button name="submit_btn" type="submit" id="login_btn"><strong>Sign Up</strong></button></a>
                <!--<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/>-->

                
             
             <p>Already have an account? <a href="login_student.php">Sign in</a></p>
             </form>
        </div>

           <?php
      if(isset($_POST['submit_btn']))
      {
         // echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
         $firstname =$_POST['firstname'];
         $lastname =$_POST['lastname'];
         $email =$_POST['email'];
         $phno =$_POST['phno'];
         $password =$_POST['password'];
         $rpassword =$_POST['rpassword'];
         $password=md5($password);
         $rpassword=md5($rpassword);
         if($password==$rpassword)
         {
            $query="select * from login_student WHERE phno='$phno' ";
            $query_run =mysqli_query($con,$query);
            
            if(mysqli_num_rows($query_run)>0)
            {
                //there is already a user with the same username
                echo '<script type="text/javascript"> alert("User already exists... try another username") </script>';
            }
            else
            {
                $query="insert into login_student values('$firstname','$lastname','$email','$phno','$password')";
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
      }
   ?>
    </body>
</html>