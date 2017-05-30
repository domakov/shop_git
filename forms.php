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

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
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
	$("#login").validate();

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
          <a href="index.html">Home</a>
           &gt; <a href="cart.html">Basket</a>
        </div>
        <h1>My account</h1>
      </div>
    </div>
  </div>
  <!-- end of intro -->
  
  
  <!-- ********************** --> 
  <!--      C O N T E N T     --> 
  <!-- ********************** --> 
  <div id="content" class="container_16">
  

    <div class="grid_16">

      <form id="create" class="clearfix" action="#">
        <h2 class="s_title_1"><span class="s_secondary_color">Form</span> Title</h2>
        <div class="clear"></div>

        <div class="s_row_2 clearfix">
          <label class="required"><strong>Input field</strong></label>
          <input type="text" size="30" />
        </div>

        <div class="s_row_2 clearfix">
          <label><strong>Longer input field</strong></label>
          <input type="text" size="90" />
        </div>

        <div class="s_row_2 clearfix">
          <label><strong>Textarea</strong></label>
          <textarea rows="10" cols="87"></textarea>
        </div>

        <div class="s_row_2 clearfix">
          <label><strong>Select field</strong></label>
          <select style="width: 212px;">
          	<option>Option 1</option>
          	<option>Option 2</option>
          	<option>Option 3</option>
          </select>
        </div>
        
        <div class="s_row_2 clearfix">
          <label><strong>Inline select fileds</strong></label>
          <select class="inline" style="width: 100px;">
          	<option>Option 1</option>
          	<option>Option 2</option>
          	<option>Option 3</option>
          </select>
          /
          <select class="inline" style="width: 100px;">
          	<option>Option 1</option>
          	<option>Option 2</option>
          	<option>Option 3</option>
          </select>
          /
          <select class="inline" style="width: 100px;">
          	<option>Option 1</option>
          	<option>Option 2</option>
          	<option>Option 3</option>
          </select>
        </div>
        
        <div class="s_row_2 clearfix">
          <label><strong>Multiple select field</strong></label>
          <select multiple="multiple" size="5" style="width: 212px;">
          	<option>Option 1</option>
          	<option>Option 2</option>
          	<option>Option 3</option>
          	<option>Option 4</option>
          	<option>Option 5</option>
          	<option>Option 6</option>
          	<option>Option 7</option>
          	<option>Option 8</option>
          	<option>Option 9</option>
          </select>
        </div>
        
        <div class="s_row_2 clearfix">
          <label><strong>Radios group</strong></label>
          <div class="s_full">
            <label class="s_radio"><input type="radio" /> Option 1</label>
            <label class="s_radio"><input type="radio" /> Option 2</label>
            <label class="s_radio"><input type="radio" /> Option 3</label>
            <label class="s_radio"><input type="radio" /> Option 4</label>
            <label class="s_radio"><input type="radio" /> Option 5</label>
            <label class="s_radio"><input type="radio" /> Option 6</label>
            <label class="s_radio"><input type="radio" /> Option 7</label>
            <label class="s_radio"><input type="radio" /> Option 8</label>
          </div>
        </div>
        
        <div class="s_row_2 clearfix">
          <label><strong>Checkboxes group</strong></label>
          <div class="s_full">
            <label class="s_radio"><input type="checkbox" /> Option 1</label>
            <label class="s_radio"><input type="checkbox" /> Option 2</label>
            <label class="s_radio"><input type="checkbox" /> Option 3</label>
            <label class="s_radio"><input type="checkbox" /> Option 4</label>
            <label class="s_radio"><input type="checkbox" /> Option 5</label>
            <label class="s_radio"><input type="checkbox" /> Option 6</label>
            <label class="s_radio"><input type="checkbox" /> Option 7</label>
            <label class="s_radio"><input type="checkbox" /> Option 8</label>
          </div>
        </div>

        <a class="s_button_1 s_main_color_bgr left" onclick="$('#create').submit();"><span class="s_text">Button</span></a>
        <a class="s_button_1 s_ddd_bgr left" onclick="$('#create').submit();"><span class="s_text">Reset button</span></a>
        
      </form>
      
      <br />
      <br />
  
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
