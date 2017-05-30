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
