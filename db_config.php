<?php
    $conn = mysqli_connect('localhost','root','','test');
    if (!$conn)
    {
      print mysqli_error($conn);
      die ("無法連結資料庫");
      exit;
    }

?>
