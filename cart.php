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
           &gt; <a href="cart.html">Basket</a>
        </div>
        <h1>Shopping Cart (0.00kg)</h1>
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
            <th width="65">Remove</th>
            <th width="60">Image</th>
            <th width="320">Name</th>
            <th>Model</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total</th>
          </tr>
          <tr class="even">
            <td valign="middle"><input type="checkbox" /></td>
            <td valign="middle"><a href="product.html"><img src="images/dummy/pic_1.jpg" width="60" height="60" alt="Panasonic Lumix" /></a></td>
            <td valign="middle"><a href="product.html"><strong>Panasonic Lumix</strong></a></td>
            <td valign="middle">Product 4</td>
            <td valign="middle"><input type="text" size="3" /></td>
            <td valign="middle">94.00<span class="s_currency s_after"> eur</span></td>
            <td valign="middle">94.00<span class="s_currency s_after"> eur</span></td>
          </tr>
          <tr class="odd">
            <td valign="middle"><input type="checkbox" /></td>
            <td valign="middle"><a href="product.html"><img src="images/dummy/pic_2.jpg" width="60" height="60" alt="Armani Acqua di Gioia" /></a></td>
            <td valign="middle"><a href="product.html"><strong>Armani Acqua di Gioia</strong></a></td>
            <td valign="middle">Product 4</td>
            <td valign="middle"><input type="text" size="3" /></td>
            <td valign="middle">822.50<span class="s_currency s_after"> eur</span></td>
            <td valign="middle">822.50<span class="s_currency s_after"> eur</span></td>
          </tr>
          <tr class="even">
            <td valign="middle"><input type="checkbox" /></td>
            <td valign="middle"><a href="product.html"><img src="images/dummy/pic_3.jpg" width="60" height="60" alt="Jameson Whiskey Special Reserve 12 yers" /></a></td>
            <td valign="middle"><a href="product.html"><strong>Jameson Whiskey Special Reserve 12 yers</strong></a></td>
            <td valign="middle">Product 8</td>
            <td valign="middle"><input type="text" size="3" /></td>
            <td valign="middle">117.50<span class="s_currency s_after"> eur</span></td>
            <td valign="middle">117.50<span class="s_currency s_after"> eur</span></td>
          </tr>
        </table>
        <br />
        <p class="s_total"><strong>Sub-Total:</strong> 880.00<span class="s_currency s_after"> eur</span></p>
        <p class="s_total"><strong>VAT 17.5%:</strong> 154.00<span class="s_currency s_after"> eur</span></p>
        <p class="s_total s_secondary_color last"><strong>Total:</strong> 1,034.00<span class="s_currency s_after"> eur</span></p>
                        
        <div class="clear"></div>
        <br />

        <a class="s_button_1 s_ddd_bgr left"><span class="s_text">Continue Shopping</span></a>
        <button class="s_button_1 s_main_color_bgr" type="submit"><span class="s_text">Checkout</span></button>
        <a class="s_button_1 s_main_color_bgr"><span class="s_text">Update</span></a>
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
