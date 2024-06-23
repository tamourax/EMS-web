<?php
require "conect.php";
session_start();
$id = $_SESSION['id'];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
    <script src="script.js"></script> 
   <title>coursesDeat</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
     <body >
     
        <header class="header">
   
            <section class="flex">
         
               <a href="home.html" class="logo">Eelu.</a>
              
         
         
         
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
<div style="    display: flex;justify-content: space-around;">
    <a style="    background-color: #80808024;color: black;" href="courses.php" class="inline-btn">course </a>
    <a style="    background-color: #80808024;color: black;" href="GRADE.php?id=<?php echo $id; ?>" class="inline-btn">student grade</a>
</div>
<p style="color: black; font-size: xx-large; padding: 42px;"> course outline</p>
     <div class="gl-accordion">
     <div class="acc-title" data-init="init">Agen<a style="color: black;" href="courses.php">da for Web Designin</a>g</div>
     <div class="acc-body" style="height: 0px;">
       
     </div>
     </div>
</div> 
<div class="gl-accordion">
    <div class="acc-title" data-init="init"><a style="color: black;" href="courses.php">Introduction to htm</a>l</div>
    <div class="acc-body" style="height: 0px;">
      
    </div>
    </div>
</div> 
<div class="gl-accordion">
    <div class="acc-title" data-init="init"><a style="color: black;" href="courses.php">Introduction to sty</a>le by css</div>
    <div class="acc-body" style="height: 0px;">
      
    </div>
    </div>
</div> 
<div class="gl-accordion">
    <div class="acc-title" data-init="init"><a style="color: black;" href="courses.php">Introduction to php</a></div>
    <div class="acc-body" style="height: 0px;">
      
    </div>
    </div>
</div> 
<div class="gl-accordion" >
    <div class="acc-title" data-init="init"><a style="color: black;" href="courses.php">Introduction to sql</a></div>
    <div class="acc-body" style="height: 0px;">
      
    </div>
    </div>
    
</div> 
<hr style="border: solid #00000047;margin-top: 30px;">
<body style="position: relative;  " > 
    <div class="main" style="position: relative ;width: 100%;" >
        <div class="chart-container">
            <canvas id="pieChart"></canvas> 
        </div>
      <table style="position: absolute;right: 0;top: 0%;border-spacing: 30px ;" >
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

<hr>
<div class="main" style="position: relative ;width: 100%;" >
    <div class="chart-containers">
        <canvas id="pieCharts"></canvas> 
    </div>
     
    <table style="position: absolute;right: 0;top: 0%;border-spacing: 30px ;" >
    <tr>
      <th>final</th>
      <th class="final">  </th>
    </tr>
     <tr>
      <th>MIDTERM</th>
      <th class="mid"> </th>
    </tr>
    <tr>
        <th>quiz</th>
        <th class="quiz"></th>
      </tr>
      <tr>
        <th>pro</th>
        <th class="pro"> </th>
      </tr>
      <tr>
        <th>ATTEND</th>
        <th class="attend"> </th>
       </tr>
   </table>
          
    
    
</div>

<style>
          .charts {
    display: flex; 
 }
 .chart-containers {
    margin-top: 70px;
    width: 300px;
    height: 300px;
    margin-right: 20px; /* Add spacing between charts */
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
      
        th{
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
       
            .td,.shet{
                border: 1px #00000070  solid;
                border-collapse: collapse;
                text-align: center;
                padding: 0;
                font-size: x-large;


            }
      
        #css2{
                position: relative;
                left: 21%;
                top: 23%;
        
            }
            #html2{
                position: relative;
                left: 63%;
                top: 13%;
        
            }
            #php2{
                position: relative;
                left: 39%;
                top: 52%;
        
        
            }
            #sql2{
                position: relative;
                  left:  12%;
                   bottom: -14%;
        
            }
            #javaScript2{
                position: relative;
                 left: 67%;
                 top: 22%;
        }
           
        
            .p{
                display: block;
            }
            td{
                padding-bottom: 18%;
            }
            .gl-accordion{
                
                cursor: pointer;
                border: solid #00000029;
  height: 79px;
  margin-top: 42px;
  background-color: white;
  font-style: italic;
  font-size: large;
  padding: 22px;
    padding-left: 11px;
  padding-left: 72px;
  width: 68%;
  margin-left: 3%;
  box-shadow: 0 8px 40px 0 rgba(0,0,0,.1) !important;
 }
</style>
        <script src="js/script.js"></script>
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
            const pieChartCanvass = document.getElementById('pieCharts');
            const pieCharts = new Chart(pieChartCanvass, {
                type: 'pie',
                data: {
                    labels: ['final', 'MIDTERM', 'quiz', 'pro', 'ATTEND'],
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
