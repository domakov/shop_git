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
          <a href="index.html">Home</a>
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

      <div class="s_subcategories s_grid_view s_listing clearfix">
        <div class="s_subcategory"> <a href=""><img src="images/category_100x100.jpg" title="Digital Cameras" alt="Digital Cameras" style="margin-bottom: 3px;" /></a> <a href="">Digital Cameras</a> </div>
        <div class="s_subcategory"> <a href=""><img src="images/category_100x100.jpg" title="Home Audio" alt="Home Audio" style="margin-bottom: 3px;" /></a> <a href="">Home Audio</a> </div>
        <div class="s_subcategory"> <a href=""><img src="images/category_100x100.jpg" title="Home Cinema" alt="Home Cinema" style="margin-bottom: 3px;" /></a> <a href="">Home Cinema</a> </div>
        <div class="s_subcategory"> <a href=""><img src="images/category_100x100.jpg" title="Cell Phones" alt="Cell Phones" style="margin-bottom: 3px;" /></a> <a href="">Cell Phones</a> </div>
        <div class="s_subcategory"> <a href=""><img src="images/category_100x100.jpg" title="MP3 Players" alt="MP3 Players" style="margin-bottom: 3px;" /></a> <a href="">MP3 Players</a> </div>
        <div class="s_subcategory"> <a href=""><img src="images/category_100x100.jpg" title="Car-Audio" alt="Car-Audio" style="margin-bottom: 3px;" /></a> <a href="">Car-Audio</a> </div>
        <div class="clear"></div>
      </div>
      
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
            <li id="view_grid" class="s_selected"><a href="listing_2.php"><span class="s_icon"></span>Grid</a></li>
            <li id="view_list"><a href="listing_1.php"><span class="s_icon"></span>List</a></li>
          </ul>
        </div>
      </div>

      <div class="clear"></div>
	   <?
			$sql="SELECT * from tovar
			INNER JOIN foto ON foto.id_tovar = tovar.id_tovar
			INNER JOIN category ON tovar.t_category = category.id_category
			LIMIT 3";
			$res=fetchAll($sql);
		?>
		
      <div class="s_listing s_grid_view clearfix">
	    <?
		  foreach($res as $array) {
		?>
      
        <div class="s_item grid_3"> <a class="s_thumb" href="product.php?id=<?=$array["id_tovar"];?>"><img src="<?=$array["f_link"];?>" title="Samsung SyncMaster 941BW" alt="Samsung SyncMaster 941BW" /></a>
          <h3><a href="product.php?id=<?=$array["id_tovar"];?>"><?=$array["t_name"];?></a></h3>
          <p class="s_model"><?=$array['c_name'];?></p>
          <p class="s_price"><span class="s_currency s_before">$</span><?=$array["t_price"];?></p>
          <p class="s_rating s_rating_5"><span style="width: 60%;" class="s_percent"></span></p>
          <a class="s_button_add_to_cart" href="product.php?id=<?=$array["id_tovar"];?>"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
		
		<?}?>

      </div>

      <div class="pagination">
        <div class="links"> <b>1</b> <a href="">2</a> <a href="">&gt;</a> <a href="">&gt;|</a> </div>
        <div class="results">Showing 1 to 12 of 20 (2 Pages)</div>
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
  <div id="shop_info">
    <div id="shop_info_wrap">
      <div class="container_12">
        <div id="shop_description" class="grid_3">
          <h2>Shoppica Theme</h2>
          <p>Pellentesque a arcu ut nisi semper cursus. Nullam vehicula dapibus ultrices. Integer nunc risus, fringilla ut hendrerit a, dapibus vestibulum ante. In ullamcorper erat et orci mattis rutrum et a enim. Curabitur semper, erat sit amet condimentum volutpat, enim nisi auctor augue, id fringilla est dui non lectus. Cras in urna ante, sit amet dignissim orci. Proin nibh urna, consectetur vitae placerat luctus.</p>
        </div>
        <div id="shop_contacts" class="grid_3">
          <h2>Contact Us</h2>
          <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td valign="middle"><span class="s_icon_32"><span class="s_icon s_phone_32"></span>5234452 <br /></span></td>
            </tr>
            <tr>
              <td valign="middle"><span class="s_icon_32"><span class="s_icon s_fax_32"></span>5234452 <br /></span></td>
            </tr>
            <tr>
              <td valign="middle"><span class="s_icon_32"><span class="s_icon s_mail_32"></span>pinko@example.com <br /> pinko@example.com</span></td>
            </tr>
            <tr>
              <td valign="middle"><span class="s_icon_32"><span class="s_icon s_skype_32"></span>my_skype <br /> </span></td>
            </tr>
          </table>
        </div>
        <div id="twitter" class="grid_3">
          <h2>Twitter</h2>
          <ul id="twitter_update_list"><li></li></ul>
          <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
          <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/themeburn.json?callback=twitterCallback2&amp;count=2"></script> 
        </div>
        <div id="facebook" class="grid_3">
          <h2>Facebook</h2>
          <div class="s_widget_holder">
            <fb:fan profileid="111188056908" stream="0" connections="6" logobar="0" width="220" css="http://svest.no-ip.org/test/opencart/catalog/view/theme/shoppica/stylesheet/facebook.css.php?300"></fb:fan>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
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
