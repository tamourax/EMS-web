<?php
require "conect.php";
$name;

// Create connection

session_start();

if (isset($_POST['student'])) {
    // $id = mysqli_real_escape_string($conn, $_POST['id']);
    // $pass = md5(mysqli_real_escape_string($conn, $_POST['pass'])); // Using MD5, but it's not recommended
    $id = $_POST['id'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM users WHERE id='$id' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['id'] = $id;
        header('Location: home.html');
        exit();
    } else {
        $id_error = '<p style="color: red; font-weight: bold;">Invalid password</p> <br>';
        $err = 1;
    }
}

if (isset($_POST['teacher'])) {
    // $id = mysqli_real_escape_string($conn, $_POST['id']);
    // $pass = md5(mysqli_real_escape_string($conn, $_POST['pass'])); // Using MD5, but it's not recommended
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $query = "SELECT * FROM professor  WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['id'] = $id;
        header('Location:pof/home.html');
        exit();
    } else {
        $id_error = '<p style="color: red; font-weight: bold;">Invalid password</p> <br>';
        $err = 1;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https:ccom/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data" class="login">
      <h3>welcome back!</h3>
      <p>your id <span>*</span></p>
      <input type="" name="id" placeholder="enter your id" maxlength="50" required class="box">
      <p>your password <span>*</span></p>
      <input type="password" name="pass" placeholder="enter your password" maxlength="20" required class="box">
      <input type="submit" name="student" value="login as student" class="btn">
      <input type="submit" name="teacher" value="login as teacher" class="btn">
   </form>

</section>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>