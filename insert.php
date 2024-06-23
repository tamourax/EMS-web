<?php 
 include 'quiz..php';?><html>
    <head>
        <title>Quiz</title>
    </head>
    <body>
    <form enctype="multipart/form-data" action="insert.php" method="post" name="changer">
<input name="MAX_FILE_SIZE" value="102400" type="hidden">
<input name="images" accept="image/jpeg" type="file">
<input value="Submit" type="submit">
    </body>
  
</html>