<?php
$connect = mysqli_connect("sql204.byethost8.com", "b8_22044911","karatau12345", "b8_22044911_main");
mysqli_query ($connect,"SET CHARACTER SET 'utf8'");
mysqli_query ($connect,"set character_set_client='utf8'");
mysqli_query ($connect,"set character_set_results='utf8'");
mysqli_query ($connect,"set collation_connection='utf8_general_ci'");
mysqli_query ($connect,"SET NAMES utf8");
if(isset($_POST["v1"], $_POST["v2"], $_POST["v3"], $_POST["v4"],$_POST["v5"],$_POST["v6"]))
{
 $v1 = mysqli_real_escape_string($connect, $_POST["v1"]);
 $v2 = mysqli_real_escape_string($connect, $_POST["v2"]);
    $v3 = mysqli_real_escape_string($connect, $_POST["v3"]);
    $v4 = mysqli_real_escape_string($connect, $_POST["v4"]);
    $v5 = mysqli_real_escape_string($connect, $_POST["v5"]);
    $v6 = mysqli_real_escape_string($connect, $_POST["v6"]);
 $query = "INSERT INTO table2(sem_rus,sem_lat,sem_kaz,rus,lat,kaz) VALUES('$v1', '$v2', '$v3', '$v4','$v5', '$v6')";
 if(mysqli_query($connect, $query))
 {
  echo 'Данные добавлены';
 }
}
?>