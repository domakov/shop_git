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
      
      <div class="s_listing s_grid_view clearfix">
      
        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_1.jpg" title="Samsung SyncMaster 941BW" alt="Samsung SyncMaster 941BW" /></a>
          <h3><a href="product.php">Samsung SyncMaster 941BW</a></h3>
          <p class="s_model">Product 6</p>
          <p class="s_price"><span class="s_currency s_before">$</span>387.42</p>
          <p class="s_rating s_rating_5"><span style="width: 60%;" class="s_percent"></span></p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>

        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_2.jpg" title="Casual brownies" alt="Casual brownies" /></a>
          <h3><a href="product.php">Casual brownies</a></h3>
          <p class="s_model">Product 7</p>
          <p class="s_price"><span class="s_currency s_before">$</span>193.71</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>

        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_3.jpg" title="White football trainers" alt="White football trainers" /></a>
          <h3><a href="product.php">White football trainers</a></h3>
          <p class="s_model">Product 8</p>
          <p class="s_price"><span class="s_currency s_before">$</span>193.71</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>

        <div class="clear"></div>

        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_4.jpg" title="Brown moccasins" alt="Brown moccasins" /></a>
          <h3><a href="product.php">Brown moccasins</a></h3>
          <p class="s_model">Product 9</p>
          <p class="s_price"><span class="s_currency s_before">$</span>193.71</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        
        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_5.jpg" title="Stylish high heels " alt="Stylish high heels " /></a>
          <h3><a href="product.php">Stylish high heels </a></h3>
          <p class="s_model">product 11</p>
          <p class="s_price"><span class="s_currency s_before">$</span>195.65</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>

        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_6.jpg" title="Summer Pink" alt="Summer Pink" /></a>
          <h3><a href="product.php">Summer Pink</a></h3>
          <p class="s_model">Product 14</p>
          <p class="s_price"><span class="s_currency s_before">$</span>968.55</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>

        <div class="clear"></div>

        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_7.jpg" title="Sony VAIO" alt="Sony VAIO" /></a>
          <h3><a href="product.php">Sony VAIO</a></h3>
          <p class="s_model">Product 19</p>
          <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>1,937.10</span> <span class="s_currency s_before">$</span>1,743.39</p>
          <p class="s_rating s_rating_5"><span style="width: 100%;" class="s_percent"></span></p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        
        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_8.jpg" title="iPod Classic" alt="iPod Classic" /></a>
          <h3><a href="product.php">iPod Classic</a></h3>
          <p class="s_model">product 20</p>
          <p class="s_price"><span class="s_currency s_before">$</span>193.71</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        
        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_9.jpg" title="Black&amp;White - classy sneakers" alt="Black&amp;White - classy sneakers" /></a>
          <h3><a href="product.php">Black&amp;White - classy sneakers</a></h3>
          <p class="s_model">Product 8</p>
          <p class="s_price"><span class="s_currency s_before">$</span>193.71</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>

        <div class="clear"></div>

        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_10.jpg" title="Adidas Gazella" alt="Adidas Gazella" /></a>
          <h3><a href="product.php">Adidas Gazella</a></h3>
          <p class="s_model">Product 6</p>
          <p class="s_price"><span class="s_currency s_before">$</span>387.42</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        
        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_1.jpg" title="Classy shoes" alt="Classy shoes" /></a>
          <h3><a href="product.php">Classy shoes</a></h3>
          <p class="s_model">Product 19</p>
          <p class="s_price"><span class="s_currency s_before">$</span>1,937.10</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>

        <div class="s_item grid_3"> <a class="s_thumb" href="product.php"><img src="images/dummy/pic_2.jpg" title="Red classic" alt="Red classic" /></a>
          <h3><a href="product.php">Red classic</a></h3>
          <p class="s_model">Product 14</p>
          <p class="s_price"><span class="s_currency s_before">$</span>968.55</p>
          <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
        </div>
        
        <div class="clear"></div>

      </div>

      <div class="pagination">
        <div class="links"> <b>1</b> <a href="">2</a> <a href="">&gt;</a> <a href="">&gt;|</a> </div>
        <div class="results">Showing 1 to 12 of 20 (2 Pages)</div>
      </div>
      
		</div>
    
    <div id="right_col" class="grid_3">
      <div id="cart_side" class="s_box_1 s_cart_holder">
        <h2 class="s_secondary_color">Shopping Cart</h2>
        <div id="cart_side_contents">
          <p class="s_mb_0">0 items</p>
        </div>
      </div>
      
      <div id="categories_module" class="s_box">
        <h2>Categories</h2>
        <div class="s_list_1">
          <ul>
          	<li>
            	<a href="listing_1.html"><b>Electronics</b></a>
            	<ul>
              	<li><a href="listing_1.html">Digital Cameras</a></li>
                <li><a href="listing_1.html">Home Audio</a></li>
                <li><a href="listing_1.html">Home Cinema</a></li>
                <li><a href="listing_1.html">Cell Phones</a></li>
                <li><a href="listing_1.html">MP3 Players</a></li>
                <li><a href="listing_1.html">Car-Audio</a></li>
              </ul>
            </li>
            <li><a href="listing_1.html">Computers</a></li>
            <li><a href="listing_1.html">Clothing</a></li>
            <li><a href="listing_1.html">Shoes</a></li>
            <li><a href="listing_1.html">Gifts</a></li>
            <li><a href="listing_1.html">At home</a></li>
            <li><a href="listing_1.html">Health</a></li>
            <li><a href="listing_1.html">Jewellery</a></li>
            <li><a href="listing_1.html">Books</a></li>
          </ul>
      	</div>
			</div>
      
    	<div id="brands_module" class="s_box">
        <h2>Brands</h2>
        <select onchange="location = this.value">
          <option> --- Please Select --- </option>
          <option>Adidas</option>
          <option>Apple</option>
          <option>Armani</option>
          <option>Balenciaga</option>
          <option>Bvlgari</option>
          <option>Canon</option>
          <option>Christian Dior</option>
          <option>Elisabeth Arden</option>
          <option>Hewlett-Packard</option>
          <option>HTC</option>
          <option>Hugo Boss</option>
          <option>Nike</option>
          <option>Nikon</option>
          <option>Palm</option>
          <option>Panasonic</option>
          <option>Reebok</option>
          <option>Samsung</option>
          <option>Sony</option>
          <option>Swarovski</option>
        </select>
      </div>
      
      <div id="bestseller_side" class="s_box clearfix">
        <h2>Bestsellers</h2>
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_10.jpg" width="38" height="38" alt="iPhone 3GS 8GB" /></a>
          <h3><a href="product.php">iPhone 3GS 8GB</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>587.50</span></a></p>
        </div>
        
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_9.jpg" width="38" height="38" alt="Hubo Boss Emotion" /></a>
          <h3><a href="product.php">Hubo Boss Emotion</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>2,350.00</span></a></p>
        </div>
        
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_8.jpg" width="38" height="38" alt="Panasonic Lumix" /></a>
          <h3><a href="product.php">Panasonic Lumix</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>94.00</span></a></p>
        </div>
        
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_7.jpg" width="38" height="38" alt="Casio Exilim Zoom" /></a>
          <h3><a href="product.php">Casio Exilim Zoom</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>117.50</span></a></p>
        </div>
  
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_6.jpg" width="38" height="38" alt="Christian Dior Amber Woman" /></a>
          <h3><a href="product.php">Christian Dior Amber Woman</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>328.99</span></a></p>
        </div>
  
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_5.jpg" width="38" height="38" alt="iPod Classic" /></a>
          <h3><a href="product.php">iPod Classic</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>117.50</span></a></p>
        </div>
        
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_4.jpg" width="38" height="38" alt="Sony VAIO" /></a>
          <h3><a href="product.php">Sony VAIO</a></h3>
          <p><a href="product.php"><span class="s_old"><span class="s_currency s_before">£</span>1,175.00</span> <span class="s_secondary_color"><span class="s_currency s_before">£</span>1,057.50</span></a></p>
          <div class="s_rating_holder clearfix"><p class="s_rating s_rating_small s_rating_5 left"><span style="width: 100%;" class="s_percent"></span></p><span class="left">&nbsp;5/5</span></div>
        </div>
  
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_3.jpg" width="38" height="38" alt="Canon Digital Ixus 200 IS" /></a>
          <h3><a href="product.php">Canon Digital Ixus 200 IS</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>117.50</span></a></p>
        </div>
    
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_2.jpg" width="38" height="38" alt="Hugo Boss Chrome" /></a>
          <h3><a href="product.php">Hugo Boss Chrome</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>94.00</span></a></p>
        </div>
    
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_1.jpg" width="38" height="38" alt="Hennesy Paradis Extra" /></a>
          <h3><a href="product.php">Hennesy Paradis Extra</a></h3>
          <p><a href="product.php"><span class="s_old"><span class="s_currency s_before">£</span>1,175.00</span> <span class="s_secondary_color"><span class="s_currency s_before">£</span>1,057.50</span></a></p>
        </div>
    
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_10.jpg" width="38" height="38" alt="Elizabeth Arden Pretty" /></a>
          <h3><a href="product.php">Elizabeth Arden Pretty</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>94.00</span></a></p>
        </div>
    
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_9.jpg" width="38" height="38" alt="Sony Cyber Shot S1000" /></a>
          <h3><a href="product.php">Sony Cyber Shot S1000</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>117.50</span></a></p>
        </div>
      </div>
    
      <div id="information_module" class="s_box">
        <h2>Information</h2>
        <ul class="s_list_1">
          <li><a href="static.html">About Shoppica</a></li>
          <li><a href="static.html">Privacy Policy</a></li>
          <li><a href="static.html">Terms &amp; Conditions</a></li>
          <li><a href="contacts.html">Contact Us</a></li>
          <li><a href="sitemap.html">Site Map</a></li>
        </ul>
      </div>
  
      <div id="featured_side" class="s_box clearfix">
        <h2>Featured</h2>
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_8.jpg" width="38" height="38" alt="White football trainers" /></a>
          <h3><a href="product.php">White football trainers</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>117.50</span></a></p>
        </div>
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_7.jpg" width="38" height="38" alt="Hubo Boss Emotion" /></a>
          <h3><a href="product.php">Hubo Boss Emotion</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>2,350.00</span></a></p>
        </div>
        <div class="s_item s_size_1 clearfix">
          <a class="s_thumb" href="product.php"><img src="images/dummy/pic_6.jpg" width="38" height="38" alt="Christian Dior J'adore" /></a>
          <h3><a href="product.php">Christian Dior J'adore</a></h3>
          <p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">£</span>328.99</span></a></p>
        </div>
      </div>

    </div>
    
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
