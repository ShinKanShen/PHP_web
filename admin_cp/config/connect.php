<?php
$mysqli = new mysqli("localhost","root","","db_fastfoods");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Lỗi khi kết nối với  MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
