<?
session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your Store</title>
<meta name="description" content="My Store" />
<link rel="stylesheet" type="text/css" href="stylesheet/960.css" media="all" />
<link rel="stylesheet" type="text/css" href="stylesheet/screen.css" media="screen" />
<link rel="stylesheet" type="text/css" href="stylesheet/color.css" media="screen" />
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="stylesheet/ie.css" media="screen" />
<![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/shoppica.js"></script>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {

	jQuery.validator.setDefaults({
			errorElement: "p",
			errorClass: "s_error_msg",
			errorPlacement: function(error, element) {
					error.insertAfter(element);
			},
			highlight: function(element, errorClass, validClass) {
					$(element).addClass("error_element").removeClass(validClass);
					$(element).parent("div").addClass("s_error_row");
			},
			unhighlight: function(element, errorClass, validClass) {
					$(element).removeClass("error_element").addClass(validClass);
					$(element).parent("div").removeClass("s_error_row");
			}
	});
	$("#login").validate();

});
</script>


</head>

<body class="s_layout_fixed">

<div id="wrapper"> 
  
  <!-- ********************** --> 
  <!--      H E A D E R       --> 
  <!-- ********************** -->
  <?
    include_once('functions/db_conn.php');
		if(isset($_POST['sub']))
		{
			$log = $_POST['log'];
			$pass = $_POST['pass'];
			// $pass = md5($_POST['pass']);
			if($log==null and $pass==null)
			{
				$error= "Заполните поле!";
			}
				else
				{
					$q=mysql_query("SELECT * FROM user WHERE  email='$log' and password='$pass'");
					$r=mysql_num_rows($q);
					if($r>0)
					{
						$_SESSION["loginn"]=$log;
						
					}
					else 	{ 	
					$error= "Логин немесе пароль дұрыс емес!";	}
				}
		}
	?>
	 <?   
		include_once("includes/header.php");
		
	 ?>
	 
  <!-- end of header --> 
  <?
  include_once('functions/db_conn.php');
  ?>
  <!-- ********************** --> 
  <!--     I N T R O          -->
  <!-- ********************** --> 
  <div id="intro">
    <div id="intro_wrap">
      <div class="container_12">
        <div id="breadcrumbs" class="grid_12">
          <a href="index.html">Басты бет</a>
           &gt; <a href="cart.html">Кәрзеңке</a>
        </div>
        <h1>Менің аккаунтым</h1>
      </div>
    </div>
  </div>
  <!-- end of intro -->
  
  
  <!-- ********************** --> 
  <!--      C O N T E N T     --> 
  <!-- ********************** --> 
  	
  <div id="content"		class="container_16">
  <? if(!$_SESSION["loginn"])
  {?>
    <div id="login_page" class="grid_16">  
      <div class="grid_8 alpha">
        <h2 class="s_title_1"><span class="s_secondary_color">Мен жаңа </span> тұтынушымын.</h2>
        <div class="clear"></div>
		
		<?php require_once("functions/db_conn.php"); ?>
		

			<?php if (isset($_POST['register'])) 
			{
				if(empty($_POST['password'])) {
					echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите пароль !"> Введите пароль!</font>';
				}
				elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
					echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Пароль слишком короткий!"> Пароль слишком короткий! Пароль должен быть не менее 6 символов! </font>';
				}
				elseif(empty($_POST['cpassword'])) {
					echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введите подтверждение пароля!"> Введите подтверждение пароля!</font>';
				}
				elseif($_POST['password'] != $_POST['cpassword']) {
					echo '<br><font color="red"><img border="0" src="error.gif" align="middle" alt="Введенные пароли не совпадают!"> Введенные пароли не совпадают!</font>';
				}                      
			else
			{          
			$name=$_POST['name'];
			$surname=$_POST['surname'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$password2=$_POST['cpassword'];
			$password = md5($password);
			
			
			$query=mysql_query("SELECT * FROM user WHERE email='".$email."'");
			$numrows=mysql_num_rows($query);
			
			$sql = "INSERT INTO user(name, surname, email, password) 
					VALUES('$name','$surname','$email', '$password')";
			$result = mysql_query($sql) or die(mysql_error());
			echo "<div align='center'>Тіркелу сәтті өтті!</div>";
			}
			} 
			?>


		<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
				
			<div class="container mregister">
						<div id="login">
				
			<form name="registerform" id="registerform" action="login.php" method="post">
				<p>
					<label for="user_login">Аты<br />
					<input type="text" name="name" id="name" class="input" size="32" value=""  /></label>
				</p>
				
				<p>
					<label for="user_login">Жөні<br />
					<input type="text" name="surname" id="surname" class="input" size="32" value=""  /></label>
				</p>
				
				
				<p>
					<label for="user_pass">Email<br />
					<input type="email" name="email" id="email" class="input" value="" size="32" /></label>
				</p>
				
				<p>
					<label for="user_pass">Құпия сөз<br />
					<input type="password" name="password" id="password" class="input" value="" size="32" /></label>
				</p>
				
				<p>
					<label for="user_pass">Құпия сөзді растау<br />
					<input type="password" name="cpassword" id="password" class="input" value="" size="32" /></label>
				</p>
					
				

					<p class="submit">
					<input type="submit" name="register" id="register" class="button" value="Тіркелу" />
				</p>
				
				<p class="regtext">Сіздің поштаңыз бар ма? <a href="login.php" >Кіру</a>!</p>
			</form>
				
				</div>
				</div>
		
        <form id="account" action="index.php">
          
          <span class="clear border_ddd"></span>
          <br />
          <button class="s_button_1 s_main_color_bgr" type="submit" name="bit" ><span class="s_text">Жалғастыру</span></button>
        </form>
      </div>
      <div class="grid_8 omega">
        <h2 class="s_title_1"><span class="s_secondary_color">тұрақты</span> тұтынушы</h2>
		<div class="clear"></div>
			<form id="login" action="" method="POST">
			  <div class="s_row_3 clearfix">
			<p style="color:red;font-size:20px"><?echo $error?></p>
				<label><strong>Электрондық пошта:</strong></label>
				<input type="text" name="log" size="35" class="required email" />
				<br />
				<br />
				<label><strong>пароль:</strong></label>
				<input type="password" name="pass" size="35" class="required" />
				<br />
			  </div>
			  <span class="clear border_ddd"></span>
			  <br />
			  <div class="s_nav s_size_2 left">
				<ul class="clearfix">
				  <li><a href="#">пароль ұмыту</a></li>
				</ul>
			  </div>
			  <button class="s_button_1 s_main_color_bgr" type="submit" name="sub"><span class="s_text">кіру</span></button>
			</form>
		</div>
      <div class="clear"></div>
    </div>
	<?}?>
	
  </div>
		
		
		
  <!-- end of content --> 
  
  <!-- ********************** --> 
  <!--   S H O P   I N F O    --> 
  <!-- ********************** --> 
 
  <!-- end of shop info --> 
  
  
  
  <!-- ********************** --> 
  <!--      F O O T E R       --> 
  <!-- ********************** --> 

	<?
	include_once("includes/footer.php");
	?>
  <!-- end of FOOTER --> 
  
</div>

<div id="fb-root"></div>
<script type="text/javascript">
  window.fbAsyncInit = function() {
    FB.init({appId: '0c18007de6f00f7ecda8c040fb76cd90', status: true, cookie: true,
     xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
    '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>

</body>
</html>