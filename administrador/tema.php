<?php 
require_once("./../conexion.php");
$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; 

if(!$sidx) $sidx =1; 

$result = mysqli_query($conn, "SELECT COUNT(*) AS count FROM tema"); 
$row = mysqli_fetch_array($result); 

$count = $row['count']; 
if( $count > 0 && $limit > 0) { 
    $total_pages = ceil($count/$limit); 
} else { 
    $total_pages = 0; 
} 
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit;
if($start <0) $start = 0; 

$SQL = "SELECT * FROM tema ORDER BY $sidx $sord LIMIT $start , $limit"; 
$result = mysqli_query($conn, $SQL ) or die("Couldn't execute query.".mysqli_error($conn));
$responce = new stdClass;
$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $count; 

$i=0;
while($row = mysqli_fetch_array($result)) {
	$responce->rows[$i]['id']=$row['id'];
	$responce->rows[$i]['cell']=array($row['id'],$row['tema']);
	$i++;
}

/*if($_GET['oper']=='add')
{
 echo "hola";
}*/
echo json_encode($responce);
?>