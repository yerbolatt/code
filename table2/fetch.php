<?php
//fetch.php
$connect = mysqli_connect("sql204.byethost8.com", "b8_22044911","karatau12345", "b8_22044911_main");
mysqli_query ($connect,"SET CHARACTER SET 'utf8'");
mysqli_query ($connect,"set character_set_client='utf8'");
mysqli_query ($connect,"set character_set_results='utf8'");
mysqli_query ($connect,"set collation_connection='utf8_general_ci'");
mysqli_query ($connect,"SET NAMES utf8");
$columns = array('id','sem_rus','sem_lat','sem_kaz','rus','lat','kaz');

$query = "SELECT * FROM table2 ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE id LIKE "%'.$_POST["search"]["value"].'%" 
 OR sem_rus LIKE "%'.$_POST["search"]["value"].'%"
 OR sem_lat LIKE "%'.$_POST["search"]["value"].'%"
 OR sem_kaz LIKE "%'.$_POST["search"]["value"].'%"
 OR rus LIKE "%'.$_POST["search"]["value"].'%"
 OR lat LIKE "%'.$_POST["search"]["value"].'%"
 OR kaz LIKE "%'.$_POST["search"]["value"].'%"
  
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id ASC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row[0].'" data-column="id">' . $row[0] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row[0].'" data-column="sem_rus">' . $row[1] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row[0].'" data-column="sem_lat">' . $row[2] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row[0].'" data-column="sem_kaz">' . $row[3] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="'.$row[0].'" data-column="rus">' . $row[4] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="'.$row[0].'" data-column="lat">' . $row[5] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="'.$row[0].'" data-column="kaz">' . $row[6] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row[0].'"><i class="material-icons">delete</i></button>';
  // echo ".$row[1].";
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM table2";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>