<?php
session_start();
include('config.php');


$id=intval($_GET['id']);
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
if(isset($_POST['submit']))
{
$coursecode=$_POST['coursecode'];
$coursename=$_POST['coursename'];
$coursedomain=$_POST['coursedomain'];
$coursedes=$_POST['coursedes'];
$courserate=$_POST['courserate'];
$courseprice=$_POST['courseprice'];
$ret=mysqli_query($con,"update course set courseCode='$coursecode',courseName='$coursename',courseDomain='$coursedomain',courseDes='$coursedes',courseRate='$courserate',coursePrice='$courseprice',updationDate='$currentTime' where id='$id'");
if($ret)
{
$_SESSION['msg']="Course Updated Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Course not Updated";
}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin | Course</title>
    <link href="bootstrap.css" rel="stylesheet" />
    <link href="font-awesome.css" rel="stylesheet" />
    <link href="c_style.css" rel="stylesheet" />
</head>

<body>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Course  </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Course 
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


                        <div class="panel-body">
                       <form name="dept" method="post">
<?php
$sql=mysqli_query($con,"select * from course where id='$id'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
<p><b>Last Updated at</b> :<?php echo htmlentities($row['updationDate']);?></p>
   <div class="form-group">
    <label for="coursecode">Course Code  </label>
    <input type="text" class="form-control" id="coursecode" name="coursecode" placeholder="Course Code" value="<?php echo htmlentities($row['courseCode']);?>" required />
  </div>

 <div class="form-group">
    <label for="coursename">Course Name  </label>
    <input type="text" class="form-control" id="coursename" name="coursename" placeholder="Course Name" value="<?php echo htmlentities($row['courseName']);?>" required />
  </div>

<div class="form-group">
    <label for="coursedoamin">Course Domain  </label>
    <input type="text" class="form-control" id="coursedomain" name="coursedomain" placeholder="Course Domain" value="<?php echo htmlentities($row['courseDomain']);?>" required />
  </div>  

<div class="form-group">
    <label for="coursedes">Seat limit  </label>
    <input type="text" class="form-control" id="coursedes" name="coursedes" placeholder="Course Description" value="<?php echo htmlentities($row['courseDes']);?>" required />
  </div>  

<div class="form-group">
    <label for="courserate">Seat limit  </label>
    <input type="text" class="form-control" id="courserate" name="courserate" placeholder="Course Rate " value="<?php echo htmlentities($row['courseRate']);?>" required />
  </div>  


<div class="form-group">
    <label for="courseprice">Seat limit  </label>
    <input type="text" class="form-control" id="courseprice" name="courseprice" placeholder="Course Price" value="<?php echo htmlentities($row['coursePrice']);?>" required />
  </div>  

<?php } ?>
 <button type="submit" name="submit" class="btn btn-default"><i class=" fa fa-refresh "></i> Update</button>
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>
                
            </div>





        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
</body>
</html>
