<?php require 'connection.php'; ?>
<?php 
session_start();
$student_id = $_SESSION['student_id'];
 if (isset($_POST['Excellent'])) {
    $deleteSql = "DELETE FROM skills where Type='Coding Validation'And id=$student_id";
    $conn->query($deleteSql);
    $insertSql = "INSERT INTO skills (id,grades, why,Type)
    VALUES ('$student_id','Excellent', 'There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.','Coding Validation')";
    if ($conn->query($insertSql) === TRUE) {
        echo "New record created successfully";
        echo '<style type="text/css">.th{background-color:#00800e;}</style>'; // Embed inline style
        // $exe"<style>.th{background-color:#00800e;}</style>";
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }

 }

 if (isset($_POST['good'])){

    $deleteSql = "DELETE FROM skills where Type='Coding Validation'And id=$student_id ";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  skills  (id,grades, why,Type)
    VALUES ('$student_id','good','There are 1-3 coding errors on the site as found by me or an online validator.','Coding Validation')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.td{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }
 if (isset($_POST['fair'])){
    $deleteSql = "DELETE FROM skills where Type='Coding Validation'And id=$student_id ";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  skills  (id,grades, why,Type)
    VALUES ('$student_id','Fair','There are 4-5 coding errors on the site as found by me or an online validator.','Coding Validation')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.fair{background-color:#00800e;}</style>'; // Embed inline style
    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    } 
 }
 if (isset($_POST['poor'])){
    $deleteSql = "DELETE FROM skills where Type='Coding Validation'And id=$student_id  ";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  skills  (id,grades, why,Type)
    VALUES ('$student_id','poor','There are more than 6 coding errors on the site as found by me or an online validator.','Coding Validation')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.poor{background-color:#00800e;}</style>'; // Embed inline style
    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    } 
 }
 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if (isset($_POST['ExcellentDesign'])) {
    $deleteSql = "DELETE FROM skills where Type='Design'And id=$student_id";
    $conn->query($deleteSql);
    $insertSql = "INSERT INTO skills (id,grades, why,Type)
    VALUES ('$student_id','Excellent', 'There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.','Design')";
    if ($conn->query($insertSql) === TRUE) {
        echo "New record created successfully";
        echo '<style type="text/css">.ExcellentDesign{background-color:#00800e;}</style>'; // Embed inline style
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
 }if (isset($_POST['goodDesign'])){

    $deleteSql = "DELETE FROM skills where Type='Design'And id=$student_id";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  skills (id,grades, why,Type)
    VALUES ('$student_id','good','There are 1-3 coding errors on the site as found by me or an online validator.','Design')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.goodDesign{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }
 if (isset($_POST['fairDesign'])){

   $deleteSql = "DELETE FROM skills where Type='Design'And id=$student_id";
   $conn->query($deleteSql);
   $sql = "INSERT INTO  skills(id,grades, why,Type)
   VALUES ('$student_id','Fair','There are 4-5 coding errors on the site as found by me or an online validator.','Design')";
   if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo '<style type="text/css">.fairDesign{background-color:#00800e;}</style>'; // Embed inline style

   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
}
if (isset($_POST['poorDesign'])){
   $deleteSql = "DELETE FROM skills where Type='Design'And id=$student_id";
   $conn->query($deleteSql);
   $sql = "INSERT INTO  skills(id,grades, why,Type)
   VALUES ('$student_id','poor','There are more than 6 coding errors on the site as found by me or an online validator.','Design')";
   if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo '<style type="text/css">.poorDesign{background-color:#00800e;}</style>'; // Embed inline style
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   } 
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['ExcellentGraphics'])) {
   $deleteSql = "DELETE FROM skills where Type='Graphics'And id=$student_id";
   $conn->query($deleteSql);
   $insertSql = "INSERT INTO skills(id,grades, why,Type)
   VALUES ('$student_id','Excellent', 'There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.','Graphics')";
   if ($conn->query($insertSql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.ExcellentGraphics{background-color:#00800e;}</style>'; // Embed inline style
   } else {
       echo "Error: " . $insertSql . "<br>" . $conn->error;
   }
} 
if (isset($_POST['goodGraphics'])){

    $deleteSql = "DELETE FROM skills where Type='Graphics'And id=$student_id";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  skills (id,grades, why,Type)
    VALUES ('$student_id','good','There are 1-3 coding errors on the site as found by me or an online validator.','Graphics')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.goodGraphics{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }
 if (isset($_POST['fairGraphics'])){

   $deleteSql = "DELETE FROM skills where Type='Graphics'And id=$student_id";
   $conn->query($deleteSql);
   $sql = "INSERT INTO  skills (id,grades, why,Type)
   VALUES ('$student_id','Fair','There are 4-5 coding errors on the site as found by me or an online validator.','Graphics')";
   if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo '<style type="text/css">.fairGraphics{background-color:#00800e;}</style>'; // Embed inline style

   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
}
if (isset($_POST['poorGraphics'])){
   $deleteSql = "DELETE FROM skills where Type='Graphics'And id=$student_id";
   $conn->query($deleteSql);
   $sql = "INSERT INTO  skills (id,grades, why,Type)
   VALUES ('$student_id','poor','There are more than 6 coding errors on the site as found by me or an online validator.','Graphics')";
   if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo '<style type="text/css">.poorGraphics{background-color:#00800e;}</style>'; // Embed inline style
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   } 
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
 if (isset($_POST['goodCascading'])){

    $deleteSql = "DELETE FROM skills where Type='cascading'And id=$student_id";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  skills  (id,grades, why,Type)
    VALUES ('$student_id','good','There are 1-3 coding errors on the site as found by me or an online validator.','cascading')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.goodCascading{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }
 if (isset($_POST['ExelentCascading'])) {
    $deleteSql = "DELETE FROM skills where Type='cascading'And id=$student_id";
    $conn->query($deleteSql);
    $insertSql = "INSERT INTO skills(id,grades, why,Type)
    VALUES ('$student_id','Excellent', 'There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.','cascading')";
    if ($conn->query($insertSql) === TRUE) {
        echo "New record created successfully";
        echo '<style type="text/css">.ExelentCascading{background-color:#00800e;}</style>'; // Embed inline style
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
 }
 if (isset($_POST['fairCascading'])){

    $deleteSql = "DELETE FROM skills where Type='cascading'And id=$student_id";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  skills  (id,grades, why,Type)
    VALUES ('$student_id','Fair','There are 4-5 coding errors on the site as found by me or an online validator.','cascading')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.fairCascading{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }
  if (isset($_POST['poorCascading'])){
    $deleteSql = "DELETE FROM skills where Type='cascading'And id=$student_id";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  skills  (id,grades, why,Type)
    VALUES ('$student_id','poor','There are more than 6 coding errors on the site as found by me or an online validator.','cascading')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.poorCascading{background-color:#00800e;}</style>'; // Embed inline style
    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    } 
 } 

?>
<html>
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
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script>
$(document).ready(function() {
  $('#Excellent').click(function(event) {
    event.preventDefault(); // منع سلوك الافتراضي للزر

    $.ajax({
      type: 'POST',
      url: 'C:\xampp\htdocs\Online-Management-Education-main\pof\ir.php', // استبدل process.php بمسار الملف الذي يحتوي على الكود PHP الخاص بك
      data: { action: 'Excellent' },
      success: function(response) {
        // تحديث العناصر اللازمة في الصفحة بناءً على الاستجابة من الخادم
        // مثلاً يمكنك تغيير لون الخلفية هنا
        $('.th').css('background-color', '#00800e');
        console.log(response);
      },
      error: function(xhr, status, error) {
        console.log(error);
      }
    });
  });
});
</script>
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
   <a href="view_profile.php?id=<?php echo $student_id ; ?>" class="inline-btn" id="but">studentGrade</a>
   <a  href="ir.php" class="inline-btn my-button">Quiz</a>
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
          <?php
 require 'connection.php'; 

$fetchQuery = "SELECT img FROM quiz";
$fetchResult = mysqli_query($conn, $fetchQuery);
if ($fetchResult && mysqli_num_rows($fetchResult) > 0) {
    while ($row = mysqli_fetch_assoc($fetchResult)) {
        $imagePath = $row['img'];
        ?>
        <img src="<?php echo $imagePath; ?>" alt="">
        <?php
    }
}
?>

    <form action="" method="post">
        <table>
            <tbody>
                <tr>
                    <td style="border: none; background-color: aliceblue;"></td>
                    <td id='color'>Excellent
                        20 pts</td>
                        <td>Good
                            15 pts</td>
                            <td>fair
                                10 pts</td>
                                <td>poor
                                    1 pts</td>
                </tr>
                <tr>
                    <th >Coding Validation
                        25 %</th>
                        <th class='th' >
                            <button name="Excellent" id='Exelent' class='th'> Excellent</button><br>
                            There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.
                            </th>
                            <th class='td' >
                            <button  name="good" id='good' class='td'> good</button><br>
                                There are 1-3 coding errors on the site as found by me or an online validator.
                                </th>
                                <th class='fair'>
                                <button  name="fair" id='fair' class='fair'> fair</button><br>
                                    There are 4-5 coding errors on the site as found by me or an online validator.
                                    </th>
                                    <th class='poor'> 
                                    <button  name="poor" id='poor' class='poor'> poor</button><br>
                                        There are more than 6 coding errors on the site as found by me or an online validator.
                                        </th>
                </tr>
                <tr>
                    <th>Layout/Design
                        25 %
                        <th class='ExcellentDesign' >
                            <button  name="ExcellentDesign" id='ExcellentDesign' class='ExcellentDesign'> Excellent</button><br>
                            There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.
                            </th>
                            <th class='goodDesign' >
                            <button  name="goodDesign" id='goodDesign' class='goodDesign'> good</button><br>
                                There are 1-3 coding errors on the site as found by me or an online validator.
                                </th>
                                <th class='fairDesign'>
                                <button  name="fairDesign" id='fairDesign' class='fairDesign'> fair</button><br>
                                    There are 4-5 coding errors on the site as found by me or an online validator.
                                    </th>
                                    <th class='poorDesign'> 
                                    <button  name="poorDesign" id='poorDesign' class='poorDesign'> poor</button><br>
                                        There are more than 6 coding errors on the site as found by me or an online validator.
                                        </th>
                </tr><tr>
                    <th>Cascading Style Sheet
                        20 %</th>
                        <th class='ExelentCascading' >
                            <button  name="ExelentCascading" id='ExelentCascading' class='ExelentCascading'> Excellent</button><br>
                            There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.
                            </th>
                            <th class='goodCascading' >
                            <button  name="goodCascading" id='goodCascading' class='goodCascading'> good</button><br>
                                There are 1-3 coding errors on the site as found by me or an online validator.
                                </th>
                                <th class='fairCascading'>
                                <button  name="fairCascading" id='fairCascading' class='fairCascading'> fair</button><br>
                                    There are 4-5 coding errors on the site as found by me or an online validator.
                                    </th>
                                    <th class='poorCascading'> 
                                    <button  name="poorCascading" id='poorCascading' class='poorCascading'> poor</button><br>
                                        There are more than 6 coding errors on the site as found by me or an online validator.
                                        </th>
                </tr><tr>
                    <th>Graphics
                        15 %</th>
                        <th class='ExcellentGraphics' >
                            <button  name="ExcellentGraphics" id='ExelentGraphics' class='ExcellentGraphics'> Excellent</button><br>
                            There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.
                            </th>
                            <th class='goodGraphics' >
                            <button  name="goodGraphics" id='goodGraphics' class='goodGraphics'> good</button><br>
                                There are 1-3 coding errors on the site as found by me or an online validator.
                                </th>
                                <th class='fairGraphics'>
                                <button  name="fairGraphics" id='fairGraphics' class='fairGraphics'> fair</button><br>
                                    There are 4-5 coding errors on the site as found by me or an online validator.
                                    </th>
                                    <th class='poorGraphics'> 
                                    <button  name="poorGraphics" id='poorGraphics' class='poorGraphics'> poor</button><br>
                                        There are more than 6 coding errors on the site as found by me or an online validator.
                                        </th>
                </tr>
            </tbody>
        </table>
        <button name="submit"> submit</button>
        </form>  
    <style>
            th,tr{
                border: 1px solid black;
            }
            th{
                height: 150px;
                width: 20%;
                border-top-style: none;
  border-left-style: none;
  font-family: 'Open Sans', 'Oxygen', verdana, arial, helvetica, sans-serif;
  font-size: 14px;
  color: #000000ad;      
}
            td{
                border: 1px solid black;
                height: 100px;
                width: 20%;
                text-align: center;
                background-color: #1977c9;
  color: white;

            }
            p{
                font-size: x-large ;
                padding-bottom: 10px;
                color: #000000d4;
            }
            *{
                font-family: "Roboto", Arial, sans-serif;            }
                button{
                    cursor: pointer;
                    background-color: white;
  border: none;
  padding-bottom: 23;
  font-size: large;                }
  .but{
    background-color:blue;
  }
  .white{
    background-color:black;

  }
        </style>
        <script>
         let but=document.getElementById('Exelent')
            but.onload=function () {
               scroll(0,600)
               
            }
        </script>
        
    </body>
</html>
