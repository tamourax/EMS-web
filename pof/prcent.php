<?php
require "conect.php";
$sql = "SELECT totalgrade FROM grades WHERE id = '2001928'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
   $id2=  $row["totalgrade"];
}
echo $id2;

$sql2 = "SELECT totalgrade FROM grades  where id='2001929'";
$result2 = $conn->query($sql2);

    while ($row = $result2->fetch_assoc()) {
        $id1=  $row["totalgrade"];
    }
echo $id1;
?>
<!DOCTYPE html>
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
  <title>Bar Chart</title>
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

<div>
  <script>
 const data = [<?php echo $id1; ?>,  <?php echo $id2; ?> ];
 const canvas= document.createElement('canvas');
 canvas.style.marginLeft = '2%';
 canvas.style.marginTop = '30px';
 const ctx = canvas.getContext('2d');
 canvas.width = 400;
 canvas.height = 400;
 const horizontalOffset = 50; 
 const barWidth = 40;

 const barSpacing = 40;

 const barColor = 'cornflowerblue';
 const textColor = 'black';
 const gridColor = 'lightgray';

 for (let i = 0; i < data.length; i++) {
  const barHeight = data[i] * 4; 

  ctx.fillStyle = barColor;
  ctx.fillRect(
    i * (barWidth + barSpacing) + 30,
    canvas.height - barHeight,
    barWidth,
    barHeight
  );
 } 

 ctx.fillStyle = textColor;
 ctx.font = '12px Arial';

 for (let i = 0; i <= 100; i += 10) {
   const y = canvas.height - (i / 102) * canvas.height;

   if (i === 0) {
     ctx.fillText(i.toString(), 10, y + 15);
  } else {
    ctx.fillText(i.toString(), 0, y + 4);
  }
 }
 ctx.strokeStyle = gridColor;

 

 for (let i = 0; i <= 10; i++) {
   const y = canvas.height - (i / 10) * canvas.height; 
   ctx.beginPath();
   ctx.moveTo(0, y);
   ctx.lineTo(canvas.width, y);
   ctx.stroke();
 }

 document.body.appendChild(canvas);
  </script>
</div>  
  <br>
  
  <p style="display: inline;
  margin-left: 51px;
  font-size: larger;">2001929</p>  <p style="display: inline;display: inline;margin-left: 33px;font-size: larger;" >2001928</p>
</body>
</html>