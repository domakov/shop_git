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
$sql="SELECT * from category where id_category=".$_GET['id'];
$cat=fetchAll($sql);

?>
  <!-- end of header --> 
  

  <!-- ********************** --> 
  <!--     I N T R O          -->
  <!-- ********************** --> 

  <div id="intro">
    <div id="intro_wrap">
      <div class="container_12">
        <div id="breadcrumbs" class="grid_12">
        </div>
         <?foreach($cat as $array) {?>
        <h1><a href="listing_1.php?id=<?=$array["id_category"];?>"><?=$array["c_name"];?></a>
		</h1>
		<?}?>
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
          <span class="s_selected">Default</span>
          <ul class="s_options" style="display: none;">
            <li><a href="">Name A - Z</a></li>
            <li><a href="">Name Z - A</a></li>
            <li><a href="">Price Low &gt; High</a></li>
            <li><a href="">Price High &gt; Low</a></li>
            <li><a href="">Rating Highest</a></li>
            <li><a href="">Rating Lowest</a></li>
            <li><a href="">Model A - Z</a></li>
            <li><a href="">Model Z - A</a></li>
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
			$sqlt="SELECT * from tovar";
			}
			else {
			$sqlt ="SELECT * FROM tovar
			INNER JOIN foto ON foto.id_tovar = tovar.id_tovar
			INNER JOIN category ON tovar.t_category = category.id_category
			WHERE t_category = ".$_GET['id'];
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
		<span class="s_currency s_before">$</span>
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
