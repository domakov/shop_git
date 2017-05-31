<?
include_once('config.php');
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or 
die("Ошибка!"); 
if (!$conn){
echo (mysqli_errno." ".mysqli_error);	
exit;
}

function fetchAll($sql)
{
	global $conn; 
	$res=mysqli_query($conn,$sql);
	if($res) {
	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
	}else
		return "ERROR";
}

mysqli_close($conn);
?>