<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">EELU</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">walaa ashraf</h3>
         <p class="role">professor</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">walaa elbdry</h3>
      <p class="role">Professor</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
      <a href="students.html"><i class="fas fa-question"></i><span>students</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="prcent.php"><i class="fas fa-graduation-cap"></i><span>Grades</span></a>

   </nav>

</div>

<section class="courses">

   <h1 class="heading">my courses</h1>
   <div class="container mt-3 mb-3">
		<h1><b>all lectures</b></h1>
		<hr/>
				<a href="upload.php" class="btn btn-primary mt-3">Upload a New Video</a>
				<hr/>
		<div class="row">
				<?php
				include("db.php");
					
				$q = "SELECT * FROM video";

				$query = mysqli_query($conn,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
					?>

					<div class="col-md-4">
						<video width="100%" controls>
<source src="<?php echo 'upload/'.$name;?>">
</video>
					</div>

				<?php }
?>
</div>
				</div>
</body>

</section>















<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>