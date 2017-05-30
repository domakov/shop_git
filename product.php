<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your Store</title>
<meta name="description" content="My Store" />
<meta property="og:image" content="images/dummy/pic_1.jpg" />

<link rel="stylesheet" type="text/css" href="stylesheet/960.css" media="all" />
<link rel="stylesheet" type="text/css" href="stylesheet/screen.css" media="screen" />
<link rel="stylesheet" type="text/css" href="stylesheet/color.css" media="screen" />
<link rel="stylesheet" type="text/css" href="stylesheet/prettyPhoto.css" media="all" />
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="stylesheet/ie.css" media="screen" />
<![endif]-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/shoppica.js"></script>
<script type="text/javascript">

$(document).ready(function() {

  $(".s_tabs").tabs({ fx: { opacity: 'toggle', duration: 300 } });

  $("#product_images a[rel^='prettyPhoto'], #product_gallery a[rel^='prettyPhoto']").prettyPhoto({
    theme: 'light_square',
    opacity: 0.5
  });

});

</script>

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
  <div id="content" class="product_view container_16">

    <div id="product" class="grid_12">
      <div id="product_images" class="grid_6 alpha">
      	<a id="product_image_preview" rel="prettyPhoto[gallery]" href="images/dummy/pic_1.jpg"><img id="image" src="images/dummy/pic_1.jpg" title="Leica M7" alt="Leica M7" /></a>
      </div>
      <div id="product_info" class="grid_6 omega">
        <p class="s_price s_promo_price"><span class="s_old_price">940.00<span class="s_currency s_after"> eur</span></span> 822.50<span class="s_currency s_after"> eur</span></p>
        <dl class="clearfix">
          <dt>Availability</dt>
          <dd>In Stock</dd>
          <dt>Model</dt>
          <dd>Product 4</dd>
          <dt>Manufacturer</dt>
          <dd><a href="#">Canon</a></dd>
          <dt>Average Rating</dt>
          <dd>
            <p class="s_rating s_rating_5"><span style="width: 100%;" class="s_percent"></span></p>
          </dd>
        </dl>
        <div id="product_share" class="clearfix">
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style ">
          <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
          <a class="addthis_button_tweet"></a>
          <a class="addthis_counter addthis_pill_style"></a>
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4de0eff004042e7a"></script>
          <!-- AddThis Button END -->
        </div>
        <div id="product_options">
          <h3>Available Options</h3>
          <label for="option_Memory">Memory</label>
          <select id="option_Memory">
            <option value="676">1 GB +29.38<span class="s_currency s_after"> eur</span> </option>
            <option value="677">2 GB +47.00<span class="s_currency s_after"> eur</span> </option>
          </select>
          <span class="clear"></span>
        </div>
        <div id="product_buy" class="clearfix">
          <label for="product_buy_quantity">Qty:</label>
          <input id="product_buy_quantity" type="text" size="2" />
          <a id="add_to_cart" class="s_main_color_bgr"><span class="s_text"><span class="s_icon"></span> Add to Cart</span></a>
        </div>
      </div>
      <div class="clear"></div>
      <div class="s_tabs grid_12 alpha omega">
        <ul class="s_tabs_nav clearfix">
          <li><a href="#product_description">Description</a></li>
          <li><a href="#product_reviews">Reviews (1)</a></li>
          <li><a href="#product_gallery">Photos (2)</a></li>
        </ul>
        <div class="s_tab_box">
        
          <div id="product_description">
            <div class="cpt_product_description ">
              Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon&#39;s newly announced D3 professional digital SLR camera to offer serious photographers remarkable performance combined with agility.<br />
              <br />
              Similar to the D3, the D300 features Nikon&#39;s exclusive EXPEED Image Processing System that is central to driving the speed and processing power needed for many of the camera&#39;s new features. The D300 features a new 51-point autofocus system with Nikon&#39;s 3D Focus Tracking feature and two new LiveView shooting modes that allow users to frame a photograph using the camera&#39;s high-resolution LCD monitor. The D300 shares a similar Scene Recognition System as is found in the D3; it promises to greatly enhance the accuracy of autofocus, autoexposure, and auto white balance by recognizing the subject or scene being photographed and applying this information to the calculations for the three functions.<br />
              <br />
              The D300 reacts with lightning speed, powering up in a mere 0.13 seconds and shooting with an imperceptible 45-millisecond shutter release lag time. The D300 is capable of shooting at a rapid six frames per second and can go as fast as eight frames per second when using the optional MB-D10 multi-power battery pack. In continuous bursts, the D300 can shoot up to 100 shots at full 12.3-megapixel resolution. (NORMAL-LARGE image setting, using a SanDisk Extreme IV 1GB CompactFlash card.)<br />
              <br />
              The D300 incorporates a range of innovative technologies and features that will significantly improve the accuracy, control, and performance photographers can get from their equipment. Its new Scene Recognition System advances the use of Nikon&#39;s acclaimed 1,005-segment sensor to recognize colors and light patterns that help the camera determine the subject and the type of scene being photographed before a picture is taken. This information is used to improve the accuracy of autofocus, autoexposure, and auto white balance functions in the D300. For example, the camera can track moving subjects better and by identifying them, it can also automatically select focus points faster and with greater accuracy. It can also analyze highlights and more accurately determine exposure, as well as infer light sources to deliver more accurate white balance detection.
            </div>
            <!-- cpt_container_end -->
          </div>
          
          <div id="product_reviews" class="s_listing">
            <div class="s_review last">
              <p class="s_author"><strong>Shoppica</strong><small>(29/03/2011)</small></p>
              <div class="right">
                <div class="s_rating_holder">
                  <p class="s_rating s_rating_5"><span class="s_percent" style="width: 100%;"></span></p>
                  <span class="s_average">5 out of 5 Stars!</span>
                </div>
              </div>
              <div class="clear"></div>
              <p>Vestibulum molestie tellus rhoncus nulla cursus quis dictum orci laoreet! metus. Vestibulum molestie tellus rhoncus nulla cursus quis dictum orci laoreet! metus.</p>
            </div>
            <div class="pagination"><div class="results">Showing 1 to 1 of 1 (1 Pages)</div></div>
            <h2 class="s_title_1"><span class="s_main_color">Write</span> Review</h2>
            <div id="review_title" class="clear"></div>
            <div class="s_row_3 clearfix">
              <label><strong>Your Name:</strong></label>
              <input type="text" />
            </div>
            <div class="s_row_3 clearfix">
              <label><strong>Your Review:</strong></label>
              <textarea style="width: 98%;" rows="8"></textarea>
              <p class="s_legend"><span style="color: #FF0000;">Note:</span> HTML is not translated!</p>
            </div>
            <div class="s_row_3 clearfix">
              <label><strong>Rating</strong></label>
              <span class="clear"></span> <span>Bad</span>&nbsp;
              <input type="radio" />
              &nbsp;
              <input type="radio" />
              &nbsp;
              <input type="radio" />
              &nbsp;
              <input type="radio" />
              &nbsp;
              <input type="radio" />
              &nbsp; <span>Good</span>
            </div>
            <span class="clear border_ddd"></span>
            <a class="s_button_1 s_main_color_bgr"><span class="s_text">Continue</span></a> <span class="clear"></span>
          </div>
            
          <div id="product_gallery">
            <ul class="s_thumbs clearfix">
              <li><a class="s_thumb" href="images/dummy/pic_2.jpg" title="Leica M7" rel="prettyPhoto[gallery]"><img src="images/dummy/pic_2.jpg" width="120" title="Leica M7" alt="Leica M7" /></a></li>
              <li><a class="s_thumb" href="images/dummy/pic_3.jpg" title="Leica M7" rel="prettyPhoto[gallery]"><img src="images/dummy/pic_3.jpg" width="120" title="Leica M7" alt="Leica M7" /></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div id="related_products" class="grid_12 alpha omega">
        <h2 class="s_title_1"><span class="s_main_color">Related</span> Products</h2>
        <div class="clear"></div>
        <div class="s_grid_view s_listing clearfix">
          <div class="s_item grid_3">
          	<a class="s_thumb" href="product.php"><img src="images/dummy/pic_4.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.php">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="s_item grid_3">
          	<a class="s_thumb" href="product.php"><img src="images/dummy/pic_5.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.php">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="s_item grid_3">
          	<a class="s_thumb" href="product.php"><img src="images/dummy/pic_6.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.php">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="s_item grid_3">
          	<a class="s_thumb" href="product.php"><img src="images/dummy/pic_7.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
            <h3><a href="product.php">Panasonic Lumix</a></h3>
            <p class="s_model">Product 4</p>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>
            <a class="s_button_add_to_cart" href="product.php"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    
      
    </div>

    
    <div id="right_col" class="grid_3">
      <div id="cart_side" class="s_box_1 s_cart_holder">
        <h2 class="s_secondary_color">Shopping Cart</h2>
        <div id="cart_side_contents">

          <div class="s_cart_item">
            <a id="hremove_95" class="s_button_remove" href="cart.html">&nbsp;</a>
            <span class="block">1x <a href="cart.html">Panasonic Lumix</a></span>
          </div>
          <div class="s_cart_item">
            <a id="hremove_31" class="s_button_remove" href="cart.html">&nbsp;</a>
            <span class="block">1x <a href="cart.html">Armani Acqua di Gioia</a></span>
          </div>
          <div class="s_cart_item">
            <a id="hremove_87" class="s_button_remove" href="cart.html">&nbsp;</a>
            <span class="block">1x <a href="cart.html">Jameson Whiskey Special Reserve 12 yers</a></span>
          </div>
          <span class="clear s_mb_15 border_eee"></span>
          <div class="s_total clearfix"><strong class="cart_module_total left">Sub-Total:</strong><span class="cart_module_total">880.00<span class="s_currency s_after"> eur</span></span></div>
          <div class="s_total clearfix"><strong class="cart_module_total left">VAT 17.5%:</strong><span class="cart_module_total">154.00<span class="s_currency s_after"> eur</span></span></div>
          <div class="s_total clearfix"><strong class="cart_module_total left">Total:</strong><span class="cart_module_total">1,034.00<span class="s_currency s_after"> eur</span></span></div>
          <span class="clear s_mb_15"></span>
          <div class="align_center clearfix">
            <a class="s_button_1 s_secondary_color_bgr s_ml_0" href="cart.php"><span class="s_text">View Cart</span></a>
            <a class="s_button_1 s_secondary_color_bgr" href="checkout.html"><span class="s_text">Checkout</span></a>
          </div>

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
<script>
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
