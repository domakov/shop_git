<?
session_start();
?>
<?

if(isset($_POST["comment"])){ 
$id=$_GET["id"];
	$text=$_POST["text"];
	$email=$_SESSION["loginn"];	
	$sql_id='SELECT * FROM `user` WHERE email="'.$email.'"';
	$result = fetchArray($sql_id);
	if ($_SESSION["loginn"]){
			$error="Хат жіберілді";
		}else{
			$error="Қате" ;
	}
	if($email!="" and $text!=""){
		$sql='INSERT INTO comment(`id_tovar`,`id_user`,`text`) values('.'"'.$id.'"'.','.'"'.$result[id_user].'"'.','.'"'.$text.'"'.')'; 
		$result = fetchOne($sql);
				
	}
	$_POST[]=null;
	unset($_POST["comment"]);
 }

if(isset($_GET["id"])){ 
$id=$_GET["id"];
		$sql="SELECT * FROM tovar as t
		INNER JOIN category as c ON
		c.id_category=t.t_category
		INNER JOIN foto as f ON
		f.id_tovar=t.id_tovar
		WHERE t.id_tovar=".$id;
		$tovar=fetchArray($sql);		
}

$sql_comment="SELECT * FROM comment WHERE id_tovar=".$tovar["id_tovar"];
$comment=fetchAll($sql_comment);

$sql_foto="SELECT * FROM foto WHERE id_tovar=".$tovar["id_tovar"];
$foto=fetchAll($sql_foto);

$sql_review="SELECT * FROM comment
INNER JOIN user ON user.id_user=comment.id_user
 WHERE id_tovar=".$tovar["id_tovar"];
$com=fetchAll($sql_review);

?>