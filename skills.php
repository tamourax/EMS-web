<?php 
require "conect.php";
session_start();
$id = $_SESSION['id'];
 // استقبال قيمة id من الـ GET parameter

?>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>my Grades</title>
     
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
     
     </head>
    <body>
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
    <div style="    display: flex;justify-content: space-around; margin-bottom: 4%;margin-right: 25%;">
        <a  style="    background-color: #80808024;color: black;" href="playlist.php" class="inline-btn" id="but">course Detals</a>
        <a style="    background-color: #80808024;color: black; " href="playlistGrade.html" class="inline-btn" id="but"> My Grade</a>
     </div>
 <div class="info"> 
    <form action="" method="post">
        <table>
            <tbody>
                <!-- <tr>
                    <td style="border: none; background-color: aliceblue;"></td>
                    <td>Excellent
                        20 pts</td>
                        <td>Good:15pts</td>
                            <td>fair
                                10 pts</td>
                                <td>poor:1pts</td>

                </tr> -->
     <tr>
                
           <?php
                        
    $sql = "SELECT grades, why FROM skills WHERE grades='Excellent'AND Type='Coding Validation'AND id='$id' AND id='$id'" ;
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Excellent:20pts</td>';
            echo'</tr>';
            echo' <th >Coding Validation25 %</th>';
            echo '<th style="background-color: #00800ec2;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='good' AND Type='Coding Validation'AND id='$id'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Good:15pts</td>';
            echo'</tr>';
            echo' <th >Coding Validation25 %</th>';
            echo '<th style="background-color: #00800e91;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='fair'AND Type='Coding Validation'AND id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Fair:10pts</td>';
            echo'</tr>';
            echo' <th >Coding Validation25 %</th>';
            echo '<th style="background-color: yellow;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    
    ////////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='poor'AND Type='Coding Validation'AND id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>poor:1pts</td>';
            echo'</tr>';
            echo' <th >Coding Validation25 %</th>';
            echo '<th style="background-color: red;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
  ?>
        </tr>
                <tr>
                        <?php
                        
    $sql = "SELECT grades, why FROM skills WHERE grades='Excellent'AND Type='Design'AND id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Excellent:20pts</td>';
            echo'</tr>';
            echo' <th >Layout/Design 25 %</th>';
            echo '<th style="background-color: #00800ec2;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='good' And Type='Design'AND id='$id'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Good:15pts</td>';
            echo'</tr>';
            echo' <th >Layout/Design 25 %</th>';
            echo '<th style="background-color: #00800e91;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='fair' And Type='Design'AND id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Fair:10pts</td>';
            echo'</tr>';
            echo' <th >Layout/Design 25 %</th>';
            echo '<th style="background-color: yellow;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    ////////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='poor' And Type='Design'AND id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>poor:1pts</td>';
            echo'</tr>';
            echo' <th >Layout/Design 25 %</th>';
            echo '<th style="background-color: red;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    
  ?>
                </tr>
                    <!-- /////////////////////////////Cascading Style Sheet //////////////////////////////////// -->

                <tr>
                        <?php
                        
    $sql = "SELECT grades, why FROM skills WHERE grades='Excellent'AND Type='cascading'AND id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Excellent:20pts</td>';
            echo'</tr>';
            echo' <th >Cascading Style Sheet 20 %</th>';
            echo '<th style="background-color: #00800ec2;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='good'AND Type='cascading'AND id='$id'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Good:15pts</td>';
            echo'</tr>';
            echo' <th >Cascading Style Sheet 20 %</th>';
            echo '<th style="background-color: #00800e91;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='fair'AND Type='cascading'AND id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Fair:10pts</td>';
            echo'</tr>';
            echo' <th >Cascading Style Sheet 20 %</th>';
            echo '<th style="background-color: yellow;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    ////////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='poor'AND Type='cascading'AND id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>poor:1pts</td>';
            echo'</tr>';
            echo' <th >Cascading Style Sheet 20 %</th>';
            echo '<th style="background-color: red;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    
  ?>
  </tr>  
    <!-- /////////////////////////////Graphics//////////////////////////////////// -->
          
                      <tr>
                        <?php
                        
    $sql = "SELECT grades, why FROM skills WHERE grades='Excellent'AND Type='Graphics'AND id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Excellent:20pts</td>';
            echo'</tr>';
            echo' <th >Graphics 15 %</th>';
            echo '<th style="background-color: #00800ec2;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='good'AND Type='Graphics'AND id='$id'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Good:15pts</td>';
            echo'</tr>';
            echo' <th >Graphics 15 %</th>';
            echo '<th style="background-color: #00800e91;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='fair'AND Type='Graphics'AND id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>Fair:10pts</td>';
            echo'</tr>';
            echo' <th >Graphics 15 %</th>';
            echo '<th style="background-color: yellow;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    }else {
    }
    ////////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='poor'AND Type='Graphics'AND id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td style="border: none; background-color: aliceblue;"></td>';
            echo'<td>poor:1pts</td>';
            echo'</tr>';
            echo' <th >Graphics 15 %</th>';
            echo '<th style="background-color: red;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
    }
    
  ?>
                </tr>
            </tbody>
        </table>
        </form>  
</div>                 
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
  border: none;
  padding-bottom: 23;
  font-size: large;    
  background-color: #f0ffff00;            }
  .but{
    background-color: #00800e00;  }
    .info{
        
        background-color: var(--white);
  border-radius: .5rem;
  padding: 5rem;
  width: 99%;
  margin-top: 5%;
 }
    
</style>
    </body>
</html>
