<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mooc";
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
$page = $_GET['page']; // get the requested page
$limit = $_GET['rows']; // get how many rows we want to have into the grid
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort
$sord = $_GET['sord']; 

if(!$sidx) $sidx =1; 

$result = mysqli_query($conn, "SELECT COUNT(*) AS count FROM cursos"); 
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

$SQL = "SELECT *  FROM cursos ORDER BY $sidx $sord LIMIT $start , $limit"; 
$result = mysqli_query($conn, $SQL ) or die("Couldn't execute query.".mysqli_error($conn));
$responce = new stdClass;
$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $count; 

$i=0;
while($row = mysqli_fetch_array($result)) {
	$responce->rows[$i]['id']=$row['id'];
	$responce->rows[$i]['cell']=array($row['id'],$row['titulo'],$row['id_universidad'],$row['id_plataforma'],$row['id_tema'],$row['descripcion'],$row['imagen_url'],$row['url']);
	$i++;
}
echo json_encode($responce);
?>