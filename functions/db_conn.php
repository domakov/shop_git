﻿<?
include_once('config.php');
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or 
die("Қате!"); 
if (mysqli_connect_errno()) {
printf("Базамен байланыс орнатылмады: %s\n", mysqli_connect_error());
exit();
}
function fetchAll($sql)
{
		$conn=$GLOBALS["conn"];	
		$res=mysqli_query($conn, $sql);
		$num=mysqli_num_rows($res);
		if($num>0) {
			while($arr = mysqli_fetch_assoc($res)){ 
			$result[] = $arr; 
			} 
		}
		else{
			return (mysqli_errno($conn)." ".mysqli_error($conn));
	}
	return $result;
}
function fetchOne($sql){
	$conn=$GLOBALS["conn"];	
	$result=mysqli_query($conn,$sql);
	return $result;
}
function fetchArray($sql){
	$conn=$GLOBALS["conn"];	
	$result=mysqli_query($conn,$sql);
	$array=mysqli_fetch_array($result);
	return $array;
}
//mysqli_close();
?>