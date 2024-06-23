<?php
session_start();
$id = $_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>playlist</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">Eelu.</a>

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
         <h3 class="name">shaikh anas</h3>
         <p class="role">studen</p>
         <a href="profile.html" class="btn">view profile</a>
         
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">shaikh anas</h3>
      <p class="role">studen</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>
<div style="    display: flex;justify-content: space-around; margin-bottom: 4%;">
   <a  style="    background-color: #80808024;color: black;" href="skills.php?id=<?php echo $_SESSION['id']; ?>" class="inline-btn" id="but">studentGrade</a>
   <a style="background-color: #80808024; color: black;" href="pof/good.php" class="inline-btn my-button">Quiz</a>

   <a style="    background-color: #80808024;color: black; " href="playlist.php" class="inline-btn" id="but">playlist</a>
</div>
      

<section class="playlist-videos">

   <h1 class="heading">playlist videos</h1>

   <div class="box-container">

      <a class="box" href="watch-video.html">
         <i class="fas fa-play"></i>
         <img src="images/post-1-1.png" alt="">
         <h3>complete HTML tutorial (part 01)</h3>
      </a>

      <a class="box" href="watch-video.html">
         <i class="fas fa-play"></i>
         <img src="images/post-1-2.png" alt="">
         <h3>complete HTML tutorial (part 02)</h3>
      </a>

      <a class="box" href="watch-video.html">
         <i class="fas fa-play"></i>
         <img src="images/post-1-3.png" alt="">
         <h3>complete HTML tutorial (part 03)</h3>
      </a>

      <a class="box" href="watch-video.html">
         <i class="fas fa-play"></i>
         <img src="images/post-1-4.png" alt="">
         <h3>complete HTML tutorial (part 04)</h3>
      </a>

      <a class="box" href="watch-video.html">
         <i class="fas fa-play"></i>
         <img src="images/post-1-5.png" alt="">
         <h3>complete HTML tutorial (part 05)</h3>
      </a>

      <a class="box" href="watch-video.html">
         <i class="fas fa-play"></i>
         <img src="images/post-1-6.png" alt="">
         <h3>complete HTML tutorial (part 06)</h3>
      </a>

   </div>

</section>

<script>
   // تحديد العناصر التي تحمل الفئة المحددة
   var buttons = document.getElementsByClassName('my-button');
 
   // تعيين وقت معين بالميلي ثانية قبل تنفيذ التغيير
   var delayInMilliseconds = 5000; // 5 ثوانٍ
 
   // تغيير الخاصية style.display بعد انتهاء الوقت المحدد لكل العناصر
   setTimeout(function() {
     for (var i = 0; i < buttons.length; i++) {
       buttons[i].style.display = 'none';
     }
   }, delayInMilliseconds);
 </script>


<!-- custom js file link  -->
<script src="js/script.js"></script>

  <style>
   #but:hover{
      text-decoration: underline;
      text-decoration-color: var(--main-color);
      text-underline-offset: 10px;
   text-decoration-thickness: 3px;
   }
  </style>
</body>
</html>