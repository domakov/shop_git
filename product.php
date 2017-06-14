<?
session_start();  
  include_once('functions/db_conn.php');
 include_once("includes/product_select.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$tovar["t_name"];?></title>
<meta name="description" content="My Store" />
<meta property="og:image" content="images/dummy/pic_1.jpg" />

<link rel="stylesheet" type="text/css" href="stylesheet/960.css" media="all" />
<link rel="stylesheet" type="text/css" href="stylesheet/screen.css" media="screen" />
<link rel="stylesheet" type="text/css" href="stylesheet/color.css" media="screen" />
<link rel="stylesheet" type="text/css" href="stylesheet/prettyPhoto.css" media="all" />
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="stylesheet/ie.css" media="screen" />
<![endif]-->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/shoppica.js"></script>
<script type="text/javascript">

$(document).ready(function() {

  $(".s_tabs").tabs({ fx: { opacity: 'toggle', duration: 300 } });

  $("#product_images a[rel^='prettyPhoto'], #product_gallery a[rel^='prettyPhoto']").prettyPhoto({
    theme: 'light_square',
    opacity: 0.5
  });

  
  
   $("#add_to_cart").click(function()
  { 
	var pay=$("#pay").val();
	var id_user=$("#id_user").val();
	var id=$("#id_tovar").val();
	var q=$("#pbq").val();
	var t_name=$("#t_name").val();
	$.ajax({ 
	type:"POST",
	data:{"q": q,"id":id,"id_user":id_user,"pay":pay,"t_name":t_name},
	url:"ajax.php", 
	success:function(data)
	{
		$("#tes").text(data); 
		
		
	}
	})
});
  
  
  
});

</script>
 <script type="text/javascript">
// $(document).ready(function () {
 // jQuery.validator.setDefaults({
			 // errorElement: "p",
			 // errorClass: "s_error_msg",
			 // errorPlacement: function(error, element) {
					 // error.insertAfter(element);
			 // },
			 // highlight: function(element, errorClass, validClass) {
					 // $(element).addClass("error_element").removeClass(validClass);
					// $(element).parent("div").addClass("s_error_row");
			 // },
			 // unhighlight: function(element, errorClass, validClass) {
					 // $(element).removeClass("error_element").addClass(validClass);
					 // $(element).parent("div").removeClass("s_error_row");
			 // }
	 // });
	 // $("#contact_form").validate({
		 // rules: {
			 // enquiry: {
					 // required: true,
				 // minlength: 10
			 // }
		 // }
	 // });	
 // });
 // </script>
</head>

<body class="s_layout_fixed">

<div id="wrapper"> 
  
  <!-- ********************** --> 
  <!--      H E A D E R       --> 
  <!-- ********************** --> 
  <!-- end of header --> 
  
 <? include_once("includes/header.php");
					
				
?>
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
		<a id="product_image_preview" rel="prettyPhoto[gallery]" href="<?=$tovar["f_link"]?>"><img id="image" src="<?=$tovar["f_link"]?>" title="Leica M7" alt="Leica M7" /></a>
		</div>
		<div id="product_info" class="grid_6 omega">

			
			 <p class="s_price s_promo_price" >
			 <span  class="s_old_price">	
			  <span  class="s_currency s_before"><?echo $tovar["t_price"];?>$</span>
			 </span>
			
			<span class="s_old_price"><? if($tovar["t_sale"]>0){echo $tovar["t_price"];}?><span class="s_currency s_before">$</span></span>
			<? echo ($tovar["t_price"]-($tovar["t_price"]*$tovar["t_sale"]/100));	
			?>
			<span class="s_currency s_before">$</span>
			</p>
			<input id="pay" hidden name="pay" value="<?echo ($tovar["t_price"]-($tovar["t_price"]*$tovar["t_sale"]/100))?>"/> 
			<dl class="clearfix">
			<input id="id_tovar" hidden name="id" value="<?=$tovar["id_tovar"]?>"/>
			<input  hidden  value="<?$idtov=($tovar["id_tovar"]);?>"/>
			<dt>Аты</dt>
			<input id="t_name" hidden name="id" value="<?=$tovar["t_name"]?>"/>
			<dd><?=$tovar["t_name"];?></dd>
			<dt>Категория</dt>
			<dd><?=$tovar["c_name"];?></dd>
			<dt>Рейтинг</dt>
			<dd>
			<p class="s_rating s_rating_5">
			<?
				if(isset($_POST["baga"]))
							{	
								
									$CheckBox=$_POST["rad"]; 				 
									if(empty($CheckBoxx))
										{	
											$sql="INSERT INTO raiting (rating,id_user,id_tovar) VALUES ($CheckBox,$idus,$idtov)";
											$al=fetchOne($sql);	
														
										}	
									}
									
							
							$sql="select avg(rating)*20 as kob from raiting  where id_tovar=$idtov";
							$k=fetchArray($sql);
								if($_SESSION["loginn"]){
							$sql="select * from raiting where id_user=$idus and id_tovar=$idtov";
							$tworaz=fetchArray($sql);
								}
									
									
			?>			
			<span style="width:<?=$k["kob"]?>%;" class="s_percent"></span>
			</p>
			</dd>
			</dl>
			<div id="product_share" class="clearfix">
			  <!-- AddThis Button BEGIN -->
			  <div class="addthis_toolbox addthis_default_style ">
			  <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			  <a class="addthis_button_tweet"></a>
			  <a class="addthis_counter addthis_pill_style"></a>
			  </div>
			  <!-- AddThis Button END -->
			</div>
			<div id="product_buy" class="clearfix">
			<?if($_SESSION["loginn"]){?>
				<label for="product_buy_quantity">Саны:</label>
				<input id="pbq" type="text" size="2" />
				<div id="tes"></div>
				<a  href="#" id="add_to_cart" class="s_main_color_bgr" name="basket"><span class="s_text"><span class="s_icon"></span> Себетке сақтау</span></a>
			<?}?></div>
      </div>
      <div class="clear"></div>
    <div class="s_tabs grid_12 alpha omega">
        <ul class="s_tabs_nav clearfix">
          <li><a href="#product_description">Сипаттамасы</a></li>
          <li><a href="#product_reviews">Пікірлер (<?=count($comment)?>)</a></li>
          <li><a href="#product_gallery">Сурет (<?=count($foto)?>)</a></li>
        </ul>
        <div class="s_tab_box">
			<div id="product_description">
			<div class="cpt_product_description ">
				<?=$tovar["t_description"]; ?>
			</div>
				<!-- cpt_container_end -->
			</div>
			<form id="contact_form" action="" method="POST">
		 <? if($_SESSION["loginn"]){?>
				<div id="product_reviews" class="s_listing">
					<h2 class="s_title_1"><span class="s_main_color">Пікір</span> қалдыру</h2>
					<div id="review_title" class="clear"></div>
					<div class="s_row_3 clearfix">
						<label><strong>Сіздің пікіріңіз:</strong></label>
						<div class="s_full">
						 <textarea name="text" id="enquiry" style="width: 98%;" rows="8" class="required" title="1-3000 аралығында символ болуы тиіс!!!"></textarea>
						</div>						
					</div>
					<div class="s_row_3 clearfix">							  
					  <? if(count($tworaz)>0)
					  {
						echo "Сіз бағаладыңыз!";
					  }else{?>
					   <label><strong>Рейтинг</strong></label>
					  <span class="clear"></span> <span>Төмен</span>
					  <button  name="baga" type=submit class="s_button_1 s_main_color_bgr" style="float:;"><span class="s_text">Бағалау</span></button>
					  <?for ($c = 1; $c<=5; $c++){?>
						<input type="radio" checked name="rad"" value="<?=$c?>"/>
					 <?}?><span>Жоғары</span><?}?>
					</div>
					<span class="clear border_ddd"></span>
					<button  name="comment" type=submit class="s_button_1 s_main_color_bgr"><span class="s_text">Пікір қалдыру</span></button>
						<span class="clear border_ddd"></span>
					<div class="s_review last">			 
					<?
					$sql="SELECT * FROM comment
					 INNER JOIN user ON user.id_user=comment.id_user
					 WHERE id_tovar=".$tovar["id_tovar"];
					$comm=fetchArray($sql_review);
					if(count($comm)>0){
						foreach($com as $array)
						{?>
						  <p class="s_author"><strong><?=$array["name"];?></strong><small>(<?=$array["data"]?>)</small></p>
						  <div class="right"></div>
						  <div class="clear"></div>
						  <p><?=$array["text"]?></p>
						<?}}
						else
						{echo "Комментарий жоқ!";}?>
					</div>
				</div>
				<?}else{?>
					<div id="product_reviews" class="s_review last">	
						<h4>Комментарий қалдыру үшін тіркеліңіз!</h4>					
						<?foreach($com as $array) {?>
						
						  <p class="s_author"><strong><?=$array["name"];?></strong><small><?=$array["data"]?></small></p>
						  <div class="right"></div>
						  <div class="clear"></div>
						  <p><?=$array["text"]?></p>
						  
						<?}?>
					</div><?}?>
			</form>
			  <div id="product_gallery">
				<ul class="s_thumbs clearfix">
				<?foreach($foto as $array) {?>
				  <li><a class="s_thumb" href="<?=$array["f_link"]?>" title="Leica M7" rel="prettyPhoto[gallery]"><img src="<?=$array["f_link"]?>" width="120" title="Leica M7" alt="Leica M7" /></a></li>
				<?}?>
			  </div>
        </div>
    </div>
      <div id="related_products" class="grid_12 alpha omega">
        <h2 class="s_title_1"><span class="s_main_color">Ұқсас</span> тауарлар</h2>
        <div class="clear"></div>
        <div class="s_grid_view s_listing clearfix">		
		<?foreach($tov as $array){?>
        <div class="s_item grid_3">
          	<a class="s_thumb" href="product.php?id=<?=$array["id_tovar"]?>"><img src="<?=$array["f_link"]?>"/></a>
            <h3><a href="product.php?id=<?=$array["id_tovar"]?>"><?=$array["t_name"]?></a></h3>
            <p class="s_price">94.00<span class="s_currency s_after"> eur</span></p>	
        </div>
		  <?}?>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <? include_once("includes/lis_right_col.php");?>
  </div>
  <!-- end of content -->
  
  <!-- ********************** --> 
  <!--   S H O P   I N F O    --> 
  <!-- ********************** --> 


  
  
  
  <!-- ********************** --> 
  <!--      F O O T E R       --> 
  <!-- ********************** --> 
    <?include_once("includes/footer.php");?>
  <!-- end of FOOTER --> 
</div>
<div id="fb-root"></div>
<script>/*
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
  */
</script>
</body>
</html>
