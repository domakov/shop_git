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
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/shoppica.js"></script>
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
	$("#contact_form").validate({
		rules: {
			enquiry: {
					required: true,
					minlength: 10
			}
		}
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
          <a href="">Contact Us</a>
        </div>
        <h1>Contact Us</h1>
      </div>
    </div>
  </div>
  <!-- end of intro -->

  
  <!-- ********************** --> 
  <!--      C O N T E N T     -->
  <!-- ********************** --> 
  <div id="content" class="container_16">


    
    <div id="contacts" class="s_info_page grid_12">
     	
      <h2><span class="s_secondary_color">Shop</span> address</h2>
      
      <p class="alpha grid_4"><strong>Shoppica store</strong><br /> 5 Shoppica Blvd<br /> New York<br /> 1000</p>
      <p class="grid_4"><strong>Telephone:</strong><br /> +1 (0) 7007001</p>
      <p class="omega grid_4"><strong>Fax:</strong><br /> +1 (0) 7007002</p>

      <br />
      <span class="clear border_ddd"></span>
      <br />
      
      
      <h2><span class="s_secondary_color">Send</span> a message</h2>

      <form id="contact_form" action="#" method="post" enctype="multipart/form-data">
      	<div id="contact_form_icon"></div>
        
        <div class="s_row_3 clearfix">
          <label><strong>First Name:</strong> *</label>
          <input type="text" size="40" class="required" title="Name must be between 3 and 32 characters!" />
        </div>
        <div class="s_row_3 clearfix">
          <label><strong>E-Mail Address:</strong> *</label>
          <input type="text" size="40" class="required email" title="E-Mail Address does not appear to be valid!" />
        </div>
        <div class="s_row_3 clearfix">
          <label><strong>Enquiry:</strong> *</label>
          <div class="s_full">
            <textarea id="enquiry" style="width: 98%;" rows="10" class="required" title="Enquiry must be between 10 and 3000 characters!"></textarea>
          </div>
        </div>
        <a class="s_button_1 s_main_color_bgr" onclick="$('#contact_form').submit();"><span class="s_text">Send message</span></a>
      </form>

    </div>
    
    <div id="right_col" class="grid_3">

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
    
    <div class="clear"></div>
   
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
