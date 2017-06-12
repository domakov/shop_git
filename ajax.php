<?
session_start();
include_once('functions/db_conn.php');
// echo $_POST["id_user"];
// echo($_POST["id"]);
// echo $_POST["q"]."Шт";
// echo ($_POST["pay"]);

$id_tovar=$_POST["id"];
$id_user=$_POST["id_user"];
$b_count=$_POST["q"];
$pay=$_POST["pay"];
$t_name=$_POST["t_name"];

if(!$_SESSION["order"])
	{
		$sql="INSERT INTO `order` (id_user, id_status, id_delivery) 
						 VALUES($id_user,2,1)";
		$q=fetchOne($sql);
		$sql="select LAST_INSERT_ID() as last_id";
		$q=fetchArray($sql);
		$_SESSION["order"]=$q["last_id"];
		
}
	 
	$sql="SELECT *  FROM basket WHERE id_tov=$id_tovar and id_user=$id_user";
	$q=fetchOne($sql);
	$num=mysqli_num_rows($q);
	$count=count($q);
	 //echo $num;
	if($num==0){
	$sql="INSERT INTO basket (id_tov, id_ordr,  id_user, b_count, pay) VALUES('$id_tovar', '$_SESSION[order]', '$id_user', '$b_count','$pay') ";
	}else
	{
	$sql="UPDATE basket SET b_count = $b_count where id_tov=$id_tovar";
	}
	$q=fetchOne($sql);
  

  ?>

