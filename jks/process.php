<?php
   require "config.php";
   $query="select * from login_student where phno =".$_GET['sid'];
   $result=mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    

    <?php
                            
                            while($row=mysqli_fetch_assoc($result))
                            {
                            /*echo '<tr>
                                        
                                        <td>'.$row['firstname'].'
                                        <td>'.$row['lastname'].'
                                        <td>'.$row['email'].'
                                        <td>'.$row['phno'].'
                                        <td>'.$row['password'].'
                
                                         
                                    
                                    
                                                
                                    
                                    </tr>';*/

                                    $firstname =$row['firstname'];
                                    $lastname =$row['lastname'];
                                    $email =$row['email'];
                                    $phno =$row['phno'];
                                    $password =$row['password'];

                                    $query="insert into approve values('$firstname','$lastname','$email','$phno','$password')";
                $query_run=mysqli_query($con,$query);
                
                if($query_run)
                {
                    echo '<script type="text/javascript"> alert("Approved") </script>';


                }
                else
                {
                    echo '<script type="text/javascript"> alert("Error!") </script>';
                }
                                    
                            }
                        ?>

    
    
    <button><a href="ap.php">Back</a></button>
    <button><a href="display_app.php">List the approved students</a></button>
    
</body>
</html>