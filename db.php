<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  'Shafriza123/',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
