<?php require 'connection.php'; ?>

<html lang="en">
<head>
</head>
<body>
    <center><h1>How to center an image horizontally and vertically ?</h1></center><br><br>
<?php if (isset($_POST['add'])) {
   $deleteSql = "DELETE FROM quiz";
   $conn->query($deleteSql);
    $image=$_FILES['image'];
    $fil_p="Desktop".$image['name'];
    move_uploaded_file($image["tmp_name"],$fil_p);
    $sr="INSERT into quiz (img) values ('$fil_p')";
    $result = mysqli_query($conn, $sr);
    if ($sr) {
        echo"<p>upload image sucess</p>";
        # code...
    }
}
?>



<form action="" method="post" enctype="multipart/form-data">
    <div class="image" style="margin-left: 35%;">


    <input type="file"  name="image"/>

<input type="submit" value="add" name='add' style="width:13%;height: 8%;background: #80808029;border-radius: 8px;">
    </div>
</form>
<style>
   input[type="file"]::file-selector-button {
  border-radius: 4px;
  padding: 0 16px;
  height: 40px;
  cursor: pointer;
  background-color: white;
  border: 1px solid rgba(0, 0, 0, 0.16);
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
  margin-right: 16px;
  transition: background-color 200ms;
}

/* file upload button hover state */
input[type="file"]::file-selector-button:hover {
  background-color: #f3f4f6;
}

/* file upload button active state */
input[type="file"]::file-selector-button:active {
  background-color: #e5e7eb;
}

/* ------------------------ */

/* default boilerplate to center input */
body {
 
  max-width: 100vw;
  padding: 5vmax;
  box-sizing: border-box;
}
p{
    margin-left: 41%;
    margin-top: 2px;
    font-style: italic;
    color: green;
    font-size: x-large;
}
</style>
</body>

</html>