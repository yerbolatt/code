<?php
$connect = mysqli_connect("sql204.byethost8.com", "b8_22044911","karatau12345", "b8_22044911_main");
mysqli_query ($connect,"SET CHARACTER SET 'utf8'");
mysqli_query ($connect,"set character_set_client='utf8'");
mysqli_query ($connect,"set character_set_results='utf8'");
mysqli_query ($connect,"set collation_connection='utf8_general_ci'");
mysqli_query ($connect,"SET NAMES utf8");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM table2 WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Данные удалены';
 }
}
?>
