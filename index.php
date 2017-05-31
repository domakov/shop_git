<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Сенің дүкенің</title>
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
 
<?
$sql="SELECT * from tovar 
INNER JOIN foto ON tovar.id_tovar = foto.id_foto";
	$res=fetchAll($sql);
?>
  <!-- ********************** --> 
  <!--     I N T R O          --> 
  <!-- ********************** --> 
	<script type="text/javascript" src="js/jquery/jquery.slides.js"></script> 
    <script type="text/javascript" src="js/shoppica.products_slide.js"></script>
  <div id="intro">
      <div id="intro_wrap">
        <div id="product_intro" class="container_12">
          <div id="product_intro_info" class="grid_5">
		  <?
		  $i=0;
		  foreach($res as $array){
		  $i++;
		  ?>
				<div style="position: <?if ($i==1){
				echo "relative;";} 
				else 
				{
				echo"none;";}
				?>">
				  <h2><a href="product.html"><?=$array["t_name"];?></a></h2>
				  <div class="s_rating_holder">
					<p class="s_rating s_rating_big s_rating_5"> <span style="width: 60%;" class="s_percent"></span> </p>
					<span class="s_average">3 out of 5</span> </div>
				  <p class="s_desc"> 
				  <?=$array["t_description"];
				  ?>
				  </p>
				  <div class="s_price_holder">
					<p class="s_price"> <span class="s_currency s_before">$</span>384.67 </p>
				  </div>
				</div>
				<?}?>
          </div>
          <div id="product_intro_preview">
            <div class="slides_container">
			<?
		  
		  foreach($res as $array){
		
		  ?>
              <div class="slideItem" style="display: none"><a href="product.php"><img src="<?=$array["f_link"];?>" alt="" /></a></div>
              
			  <?
			  }
			  ?>
            </div>
            <a class="s_button_prev" href="javascript:;"></a>
            <a class="s_button_next" href="javascript:;"></a>
          </div>
        </div>
      </div>
    </div>
  
  <!-- end of intro --> 
  
  
  <!-- ********************** --> 
  <!--      C O N T E N T     --> 
  <!-- ********************** --> 
  <div id="content" class="container_12">
  

    
    <div class="clear"></div>
    
    <div id="special_home" class="grid_12">
      <h2 class="s_title_1"><span class="s_main_color">Жеңілдіктер
</span> өнімдерге

</h2>
      <div class="clear"></div>
	  
      <div class="s_listing s_grid_view clearfix">
        <div class="s_item grid_2"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_5.jpg" title="Armani Acqua di Gioia" alt="Armani Acqua di Gioia" /></a>
          <h3><a href="product.php">Armani Acqua di Gioia</a></h3>
          <p class="s_model">Product 4</p>
          <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>1,538.69</span><span class="s_currency s_before">$</span>1,346.35</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        
        <div class="clear"></div>
      </div>
    </div>
    
    <div id="banners_1">
      <div class="grid_3">
        <a href="http://themeforest.net/item/shoppica-premium-open-cart-theme/235470?ref=ThemeBurn" target="_blank">
          <img src="images/dummy/banner_4.jpg">
        </a>
      </div>
      <div class="grid_3">
        <a href="http://themeforest.net/item/shoppica-premium-open-cart-theme/235470?ref=ThemeBurn" target="_blank">
          <img src="images/dummy/banner_1.jpg">
        </a>
      </div>
      <div class="grid_3">
        <a href="http://themeforest.net/item/shoppica-premium-open-cart-theme/235470?ref=ThemeBurn" target="_blank">
          <img src="images/dummy/banner_2.jpg">
        </a>
      </div>
      <div class="grid_3">
        <a href="http://themeforest.net/item/shoppica-premium-open-cart-theme/235470?ref=ThemeBurn" target="_blank">
          <img src="images/dummy/banner_3.jpg">
        </a>
      </div>
      <div class="clear"></div>
    </div>
    
    <div id="latest_home" class="grid_12">
      <h2 class="s_title_1"><span class="s_main_color">Соңғы </span> өнімдері</h2>
      <div class="clear"></div>
      <div class="s_listing s_grid_view clearfix">
        <div class="s_item grid_2"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_9.jpg" title="Sony Cyber Shot S1000" alt="Sony Cyber Shot S1000" /></a>
          <h3><a href="product.php">Sony Cyber Shot S1000</a></h3>
          <p class="s_model">Product 8</p>
          <p class="s_price"><span class="s_currency s_before">$</span>192.34</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        <div class="s_item grid_2"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_10.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
          <h3><a href="product.php">Panasonic Lumix</a></h3>
          <p class="s_model">Product 4</p>
          <p class="s_price"><span class="s_currency s_before">$</span>153.87</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        <div class="s_item grid_2"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_1.jpg" title="Samsung P200" alt="Samsung P200" /></a>
          <h3><a href="product.php">Samsung P200</a></h3>
          <p class="s_model">Product 6</p>
          <p class="s_price"><span class="s_currency s_before">$</span>384.67</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        <div class="s_item grid_2"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_2.jpg" title="Casio Exilim Zoom" alt="Casio Exilim Zoom" /></a>
          <h3><a href="product.php">Casio Exilim Zoom</a></h3>
          <p class="s_model">Product 7</p>
          <p class="s_price"><span class="s_currency s_before">$</span>192.34</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        <div class="s_item grid_2"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_3.jpg" title="Canon Digital Ixus 200 IS" alt="Canon Digital Ixus 200 IS" /></a>
          <h3><a href="product.php">Canon Digital Ixus 200 IS</a></h3>
          <p class="s_model">Product 7</p>
          <p class="s_price"><span class="s_currency s_before">$</span>192.34</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        <div class="s_item grid_2"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_4.jpg" title="Hennesy Paradis Extra" alt="Hennesy Paradis Extra" /></a>
          <h3><a href="product.php">Hennesy Paradis Extra</a></h3>
          <p class="s_model">Product 19</p>
          <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>1,923.36</span><span class="s_currency s_before">$</span>1,731.02</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    
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
