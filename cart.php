<?session_start();?>
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

</head>

<body class="s_layout_fixed">

<div id="wrapper"> 
  
  <!-- ********************** --> 
  <!--      H E A D E R       --> 
  <!-- ********************** -->
 <?    
include_once("includes/header.php");


$sql="SELECT * from basket 
INNER JOIN tovar ON basket.id_tov=tovar.id_tovar
INNER JOIN foto ON tovar.id_tovar=foto.id_tovar 
INNER JOIN category ON tovar.t_category = category.id_category ";
$res=fetchAll($sql);

?>
  <!-- end of header --> 
  

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
      </div>
    </div>
  </div>
  <!-- end of intro -->

  
  <!-- ********************** --> 
  <!--      C O N T E N T     --> 
  <!-- ********************** --> 
  <div id="content" class="container_12">
  
    <div id="shopping_cart" class="grid_12">

      <form id="cart" class="clearfix" action="checkout.html">
        <table class="s_table_1" width="100%" cellpadding="0" cellspacing="0" border="0">
          <tr>
            <th width="65">Кетіру</th>
            <th width="60">Бейне</th>
            <th width="320">Атауы</th>
            <th>Модель</th>
            <th>Сан</th>
            <th>Тауар өлшемінің бағасы</th>
            <th>Жалпылама</th>
          </tr>
		<?
	  
		foreach($res as $array){?>
		
			  <tr class="even">
				<td valign="middle"><input type="checkbox" /></td>
				<td valign="middle"><a href="product.php"><img src="<?=$array["f_link"];?>" width="60" height="60" alt="Panasonic Lumix" /></a></td>
				<td valign="middle"><a href="product.php"><strong><?=$array["t_name"];?></strong></a></td>
				<td valign="middle"><?=$array["c_name"];?></td>
				<td valign="middle"><input type="text" size="3" value="<?=$array["b_count"];?>"/></td>
				<td valign="middle"><?=$array["pay"];?><span class="s_currency s_after"> KZT</span></td>
				<td valign="middle"><?=($array["pay"]*$array["b_count"]);?><span class="s_currency s_after"> KZT</span></td>
			  </tr>
		  <?}?>
        </table>
        <br />
        <p class="s_total"><strong>Аралық:</strong> 880.00<span class="s_currency s_after"> KZT</span></p>
        <p class="s_total"><strong>Қосылған құн салығы 17.5%:</strong> 154.00<span class="s_currency s_after"> KZT</span></p>
        <p class="s_total s_secondary_color last"><strong>Жалпы:</strong><?=($array[""]);?><span class="s_currency s_after"> KZT</span></p>
                        
        <div class="clear"></div>
        <br />

        <a class="s_button_1 s_ddd_bgr left"><span class="s_text">Сатып алуды жалғастыру</span></a>
        <button class="s_button_1 s_main_color_bgr" type="submit"><span class="s_text">Шығу</span></button>
        <a class="s_button_1 s_main_color_bgr"><span class="s_text">Жаңарту</span></a>
      </form>

    </div>

    <div class="clear"></div>
    <br />
    <br />
    
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
