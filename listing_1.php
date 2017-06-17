<? session_start();?>
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


?>
  <!-- end of header --> 
  

  <!-- ********************** --> 
  <!--     I N T R O          -->
  <!-- ********************** --> 

  <div id="intro">
    <div id="intro_wrap">
      <div class="container_12">
        <div id="breadcrumbs" class="grid_12">
          <a href="">Home</a>
          &gt;
          <a href="">Clothing</a>
        </div>
        <h1>Clothing</h1>
      </div>
    </div>
  </div>
  <!-- end of intro -->

  
  <!-- ********************** --> 
  <!--      C O N T E N T     -->
  <!-- ********************** --> 
  <div id="content" class="container_12">

    
    <div id="category" class="grid_9">
	
      <div id="listing_options">
        <div id="listing_sort" class="s_switcher">
          <span class="s_selected">Сұрыптау</span>
          <ul class="s_options" style="display: none;">
				<?php
					if(!$_GET["id"]) {
						echo'
							<li><a href="listing_1.php?filter=1">А - Я</a></li>
							<li><a href="listing_1.php?filter=2">Я - А</a></li>
							<li><a href="listing_1.php?filter=3">Арзаң бағасы бойынша</a></li>
							<li><a href="listing_1.php?filter=4">Қымбат бағасы бойынша</a></li>
						';
					}
					else {
						
						echo'
							<li><a href="listing_1.php?filter=1&id='.$_GET['id'].'">А - Я</a></li>
							<li><a href="listing_1.php?filter=2&id='.$_GET['id'].'">Я - А</a></li>
							<li><a href="listing_1.php?filter=3&id='.$_GET['id'].'">Арзаң бағасы бойынша</a></li>
							<li><a href="listing_1.php?filter=4&id='.$_GET['id'].'">Қымбат бағасы бойынша</a></li>
						';
					}
				?>
          </ul>
        </div>
        <div id="view_mode" class="s_nav">
          <ul class="clearfix">
            <li id="view_grid"><a href="listing_2.php"><span class="s_icon"></span>Grid</a></li>
            <li id="view_list" class="s_selected"><a href="listing_1.html"><span class="s_icon"></span>List</a></li>
          </ul>
        </div>
      </div>

      <div class="clear"></div>
		<?
			if(!$_GET['id']){
				switch($_GET['filter']) {
					case 1:
						$sqlt="SELECT * from tovar ORDER BY t_name ASC";
						break;
					case 2:
						$sqlt="SELECT * from tovar ORDER BY t_name DESC";
						break;
					case 3:
						$sqlt="SELECT * from tovar ORDER BY t_price ASC";
						break;
					case 4:
						$sqlt="SELECT * from tovar ORDER BY t_price DESC";
						break;
					default:
						$sqlt="SELECT * from tovar";
				}
			}
			else {
				switch($_GET['filter']) {
					case 1:
						$sqlt ="SELECT * FROM tovar
						INNER JOIN foto ON foto.id_tovar = tovar.id_tovar
						INNER JOIN category ON tovar.t_category = category.id_category
						WHERE t_category = ".$_GET['id']." ORDER BY t_name ASC";
						break;
					case 2:
						$sqlt ="SELECT * FROM tovar
						INNER JOIN foto ON foto.id_tovar = tovar.id_tovar
						INNER JOIN category ON tovar.t_category = category.id_category
						WHERE t_category = ".$_GET['id']." ORDER BY t_name DESC";
						break;
					case 3:
						$sqlt ="SELECT * FROM tovar
						INNER JOIN foto ON foto.id_tovar = tovar.id_tovar
						INNER JOIN category ON tovar.t_category = category.id_category
						WHERE t_category = ".$_GET['id']." ORDER BY t_price ASC";
						break;
					case 4:
						$sqlt ="SELECT * FROM tovar
						INNER JOIN foto ON foto.id_tovar = tovar.id_tovar
						INNER JOIN category ON tovar.t_category = category.id_category
						WHERE t_category = ".$_GET['id']." ORDER BY t_price DESC";
						break;
					default:
						$sqlt ="SELECT * FROM tovar
						INNER JOIN foto ON foto.id_tovar = tovar.id_tovar
						INNER JOIN category ON tovar.t_category = category.id_category
						WHERE t_category = ".$_GET['id'];
				}
				
			}
			
			$tovar=fetchAll($sqlt);
			//var_dump($tovar);
		?>

      <div class="s_listing s_list_view clearfix">
          <?
		  foreach($tovar as $array) {
		  ?>
        <div class="s_item clearfix">
          <div class="grid_3 alpha"> <a class="s_thumb" href="product.php?id=<?=$array["id_tovar"];?>"><img src="<?=$array["f_link"];?>" title="Leica M7" alt="Leica M7" /></a> </div>
          <div class="grid_6 omega">
            <h3><a href="product.php?id=<?=$array["id_tovar"];?>"><?=$array["t_name"];?></a></h3>
            <p class="s_model"><?=$array['c_name'];?></p>
		 <p class="s_price s_promo_price" >
		 <span  class="s_old_price">	
		  <span  class="s_currency s_before"><?echo $array["t_price"];?>$</span>
		 </span>
		
		<span class="s_old_price"><? if($array["t_sale"]>0){echo $array["t_price"];}?><span class="s_currency s_before">$</span></span>
		<? echo ($array["t_price"]-($array["t_price"]*$array["t_sale"]/100));
	
		?>
		<span class="s_currency s_before"><?echo $_SESSION['currency']?></span>
		</p>
			<p class="s_description"><?=$array["t_description"];?></p>
            <a class="s_button_add_to_cart" href="product.php?id=<?=$array["id_tovar"];?>"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
        </div>
        <div class="clear"></div>
		<?}?>

      </div>
      
      <div class="pagination">
        <div class="results">Showing 1 to 6 of 6 (1 Pages)</div>
      </div>
      
    </div>
    
   <?
 
 include_once("includes/lis_right_col.php");
 
 ?>
    
    
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
