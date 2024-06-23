<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="myweb";
    $name;
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
$r=mysqli_query($conn,"select*from grade");
$id = $_GET['id'];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
    <script src="script.js"></script> 
        <title>Grade</title>
     
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
     </head>
     <body >
     
     <header class="header">
        
        <section class="flex">
     
            <a href="home.html" class="logo">EELU.</a>
      
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
           <h3 class="name">shaikh anas</h3>
           <p class="role">student</p>
           <a href="profile.html" class="btn">view profile</a>
        </div>
     
        <nav class="navbar">
           <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
           <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
           <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
           <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>Professor</span></a>
           <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
        </nav>
     
     </div>


<body style="position: relative;  " > 
<section class="courses" style="margin: 0;">
   <div style="    display: flex;justify-content: space-around; margin-bottom: 4%;">
      <a style="    background-color: #80808024;color: black;" href="CoursDeatls.php" class="inline-btn">course Details</a>
      <a style="    background-color: #80808024;color: black;" href="courses.php" class="inline-btn">courses</a>
  </div>
  <div class="chart-container">
            <canvas id="pieChart"></canvas> 
        </div>
        <div class="bar-chart-container">
        <table style="position: absolute;right: 0;top: 26%;border-spacing: 30px ;" >
      <tr>
        <th>css</th>
        <th class="final" style="width: 88.5%;">  </th>
      </tr>
       <tr>
        <th>html</th>
        <th class="mid"> </th>
      </tr>
      <tr>
          <th>php</th>
          <th class="quiz"></th>
        </tr>
        <tr>
          <th>sql</th>
          <th class="pro"> </th>
        </tr>
        <tr>
          <th>js</th>
          <th class="attend"> </th>
         </tr>
     </table>
        </div>
      
      
  </div>


  
<hr>


<form action="" method="post" >
    <table class="shet" style="width: 100%;height: 200px;margin-top: 4%;">
       <tr class="tr">
       <th class="th">QuizeOne :10</th>
       <th class="th"> QuizeTwo:10</th>
       <th class="th"> Assignment one:5</th>
       <th class="th"> Assignment two:5</th>
       <th class="th">midterm :20</th>
       <th class="th">final :50</th>
       <th class="th">Project :10</th></tr>
   <?php
       $selectQuery = "SELECT * FROM grades where id='$id'";
    $result = mysqli_query($conn, $selectQuery);

    while ($row = mysqli_fetch_array($result)) {
        echo '<tr class="tr">';
        echo '<td class="td">' . $row['QuizOne'] . '</td>';
        echo '<td class="td">' . $row['QuizTwo'] . '</td>';
        echo '<td class="td">' . $row['AssignmentOne'] . '</td>';
        echo '<td class="td">' . $row['AssignmentTwo'] . '</td>';
        echo '<td class="td">' . $row['midterm'] . '</td>';
        echo '<td class="td">' . $row['Final'] . '</td>';
        echo '<td class="td">' . $row['Project'] . '</td>';
        echo '</tr>';
    }

    mysqli_close($conn);
?>
           
   </table>
   </form>
<style>
    .charts {
    display: flex; 
 }

 .chart-container {
    width: 300px;
    height: 300px;
    margin-right: 20px; /* Add spacing between charts */
 }

 .bar-chart-container {
    width: 400px;
  height: 200px;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  margin-left: 50%;
  margin-top: -19%;
 }

 .bar {
    height: 20px;
    background-color: #ddd;
    border-radius: 5px;
 }

 /* Bar styles (you can adjust colors as needed) */
  #css-bar {
    width: 50%;
    background-color: #99d6ff;
 }

 #html-bar {
    width: 20%;
    background-color: #ccaaff;
 }

 #php-bar {
    width: 15%;
    background-color: #4dff4d;
 }

 #sql-bar {
    width: 15%;
    background-color: #ff4d4d;
 }

 #js-bar {
    width: 20%;
    background-color: #aa80ff;
 }

      
      th{
          font-size: x-large;
      }

  
     
          .td,.shet{
              border: 1px #00000070  solid;
              border-collapse: collapse;
              text-align: center;
              padding: 0;
              font-size: x-large;
  
  
          }
          .final {
            border: 1px #f000 solid;
            width: 78%;
            height: 23px;
            background: linear-gradient(to right, cornflowerblue 50%, #80808036 30%);
            
 }
 .mid {
            border: 1px #f000 solid;
            width: 25%;
            height: 23px;
            background: linear-gradient(to right,rgba(0, 0, 255, 0.329)20%, #80808036 20%);
            
 }  .quiz {
            border: 1px #f000 solid;
            width: 25%;
            height: 23px;
            background: linear-gradient(to right,#4dff4d  20%, #80808036 20%);
            
 }  
  .pro {
            border: 1px #f000 solid;
            width: 25%;
            height: 23px;
            background: linear-gradient(to right,rgb(171, 24, 24)  5%, #80808036 5%);
            
 }  .attend {
            border: 1px #f000 solid;
            width: 25%;
            height: 23px;
            background: linear-gradient(to right, #00cfffc4  5%, #80808036 5%);
            
  }
</style>
<script>
 const pieChartCanvas = document.getElementById('pieChart');
            const pieChart = new Chart(pieChartCanvas, {
                type: 'pie',
                data: {
                    labels: ['css', 'html', 'php', 'sql', 'js'],
                    datasets: [{
                        
                        data: [50, 20, 15, 15, 20],
                        backgroundColor: [
                            'cornflowerblue', // Light blue
                            '#ccaaff', // Light purple
                            '#4dff4d', // Green
                            '#ff4d4d', // Red
                            '#00cfffc4'  // Purple
                        ]
                    }]
                }
            });
</script>

</body>
</html>
