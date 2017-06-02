<?
//include_once("functions/db_conn.php");
if(isset($_POST["knopka"])){ 
	$user=$_POST["user"]; 
	$email=$_POST["e-mail"]; 
	$text=$_POST["text"]; 
	if($user!="" and $email!="" and $text!=""){
		$sql='INSERT INTO kontakt(`user`,`e-mail`,`text`) values('.'"'.$user.'",'.'"'.$email.'",'.'"'.$text.'"'.')'; 
		$result = fetchOne($sql);
		if ($result){
			$error="Хат жіберілді";
		}else{
			$error="Қате" ;
	}
	}
	$_POST[]=null;
	unset($_POST["knopka"]);
 }
//header('Location: contacts.php');
?>


