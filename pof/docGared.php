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
