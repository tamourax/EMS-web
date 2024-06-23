<!DOCTYPE html>
<?php 
require "conect.php";
$id = $_GET['id']; // استقبال قيمة id من الـ GET parameter

// تحقق مما إذا كانت قيمة id موجودة وصحيحة
if (!empty($id)) {
    // قم بتخزين قيمة id في الجلسة إذا كنت بحاجة إلى استخدامها لاحقًا
    session_start();
    $_SESSION['student_id'] = $id;
}

if (isset($_POST['grade'])){
   $QUIZ1 = $_POST['QuizOne'];
   $QUIZ2 = $_POST['QuizTwo'];
   $Assignm1 = $_POST['AssignmentOne']; 
   $Assignm2 = $_POST['AssignmentTwo'];
   $midterm = $_POST['midterm'];
   $final = $_POST['Final'];
   $Project = $_POST['Project'];
   $total=$Project+$final+$midterm+$Assignm1+$Assignm2+$QUIZ1+$QUIZ2;
   if (empty( $_POST['QuizOne'])) {
      $quizError ='<p style="color: red; font-size: small ;">pleas enter quiz one grade</p> ';
      $err=1; 
   } else {
      $sql = "INSERT INTO grades (id, QuizOne, QuizTwo, AssignmentOne, AssignmentTwo, midterm, Final, Project,totalgrade)
      VALUES ('$id','$QUIZ1', '$QUIZ2', '$Assignm1', '$Assignm2', '$midterm', '$final', '$Project','$total')";
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
      } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
      }
      # code...
   }
   

   
   
}

?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> view profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/styleprof.css">

</head>
<body>

    <header class="header">
   
        <section class="flex">
     
           <a href="home.html" class="logo">EELU</a>
     
     
           <div class="profile">
              <img src="images/pic-1.jpg" class="image" alt="">
              <h3 class="name">mina magdy</h3>
              <p class="role">student</p>
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
          <h3 class="name">mina magdy</h3>
          <p class="role">student</p>
          <a href="profile.html" class="btn">view profile</a>
       </div>
    
       <nav class="navbar">
          <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
          <a href="students.html"><i class="fas fa-question"></i><span>students</span></a>
          <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
          <a href="prcent.php"><i class="fas fa-graduation-cap"></i><span>Grades</span></a>

       </nav>
    
    </div>
    
   </head>
   <div style="    display: flex;justify-content: space-around; margin-bottom: 4%;">
   <a href="#" class="inline-btn my-button" id="but">studentGrade</a>
   <button class="inline-btn my-button" onclick="redirectToOtherPage2()" >  Quiz</button>
   
   <script>
function redirectToOtherPage2(id) {
    window.location.href = "ir.php?id=" + id;
}
</script>
</div>
   <section class="user-profile">

       <h1 class="heading">your profile</h1>
    
       <div class="info">
    
          <div class="user">
             <img src="images/pic-1.jpg" alt="">
             <h3>mina magdy </h3>
             <p>student</p>
             <!-- <a href="login.html" class="inline-btn">logout</a> -->
          </div>
       
          <div class="form-container">

           <form action="" method="post">
        
              <input type="text" name="QuizOne"  placeholder="QuizOne" ><?php if (isset($quizError)) { echo $quizError; }?>
              <input type="" name="QuizTwo"  placeholder="QuizTwo">
              <input type="" name="AssignmentOne"  placeholder="AssignmentOne">
              <input type="" name="AssignmentTwo"  placeholder="AssignmentTwo">
              <input type="" name="midterm"  placeholder="midterm">
              <input type="" name="Final"  placeholder="Final">
              <input type="" name="Project"  placeholder="Project">
              <input style="cursor: pointer;" type="submit" value="submit" name="grade">
        
           </form>
    </section>
    
   
<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>