<?php 
require "conect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<input type="button" value="ecenrnt">
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
         <h3 class="name">walaa</h3>
         <p class="role"></p>
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
      <h3 class="name">Walaa elbdry</h3>
      <p class="role">professor</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
      <a href="students.html"><i class="fas fa-question"></i><span>students</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="prcent.php"><i class="fas fa-graduation-cap"></i><span>Grades</span></a>

   </nav>

</div>


<section class="teachers">

    <h1 class="heading">expert teachers</h1>
 
 
 
    <div class="box-container">
 
       <?php 
       
       $sq="SELECT id from student"?>
 
        <div class="box">
            <div class="tutor">
               <img src="images/pic-2.jpg" alt="">
               <div>
                  <h3>hossam</h3>
                  <span>developer</span>
               </div>
            </div>
            <?php  
$sql = "SELECT id FROM student where name='hossam'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
       echo "<p>ID: <span>" . $row["id"] . "</span></p>";
?>
       <button class="inline-btn" onclick="redirectToOtherPage(<?php echo $row['id']; ?>)"> view profile</button>
       

<?php
 

       // تحديث قيمة $_SESSION['student_id'] فقط إذا لم تكن مُعرَّفة بالفعل
      
   }
} else {
   echo "0 results";
}
?>
         </div>
         <div class="box">
            <div class="tutor">
               <img src="images/pic-2.jpg" alt="">
               <div>
                  <h3>mina</h3>
                  <span>developer</span>
               </div>
            </div>
            <?php  
$sql = "SELECT id FROM student where name='mina'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
       echo "<p>ID: <span>" . $row["id"] . "</span></p>";
?>
       <button class="inline-btn" onclick="redirectToOtherPage2(<?php echo $row['id']; ?>)"> view profile</button>

<?php

   
       // تحديث قيمة $_SESSION['student_id'] فقط إذا لم تكن مُعرَّفة بالفعل
       
   }
} else {
   echo "0 results";
}

?>
        </div>   
      </div>
 
    </div>
    <script>
function redirectToOtherPage(id) {

    window.location.href = "view_profile.php?id=" + id;
    <?php 
   
    ?>
   
}
</script>
<script>
function redirectToOtherPage2(id) {
   window.location.href = "view_profile.php?id=" + id;

    // تخزين معرف الطالب في الجلسة
  

}
</script>
 </section>
<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>