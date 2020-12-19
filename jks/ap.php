<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" href="style1.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

	<input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn" aria-hidden="true"></i>
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
</body>
</html>