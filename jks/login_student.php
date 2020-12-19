<?php
      session_start();
      require "config.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name= "viewport" content="width=device-width,initial-scale=1.0">
        <title>LOGIN (STUDENT)</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <h3><strong>STUDENT LOGIN </h3></strong>
        
            
            <form action="login_student.php" method="post">
                <input type="text" name="phno" pattern="^\d{10}$" placeholder="Phone Number" required><br><br>
                <input type="password" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])(?=.*[!@#$%^&*?/\]).{8,}$" placeholder="Password" required><br><br>
                
                <a href="#">  <button name="login_student" type="submit" id="login_btn"><strong>Login</strong></button></a> 
             <!--<a href=""><input name="login_student" type="submit" id="login_btn" value="Log In"></a><br>-->
             </form>
        </div>

          <?php
    if(isset($_POST['login_student']))
    {
        $phno=$_POST['phno'];
        $password=$_POST['password'];
        $password=md5($password);
        
        $query= "select * from login_student WHERE phno='$phno' AND password='$password' ";
        
        $query_run =mysqli_query($con,$query);
        if(mysqli_num_rows($query_run)>0)
        {
            //valid
            $_SESSION['phno']=$phno;
            header('location:datapage.php');
        }
        else
        {
            //error
            echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
        }
    }

  ?>

    </body>
</html>