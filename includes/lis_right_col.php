 <?


$sql="SELECT * from basket
INNER JOIN tovar ON basket.id_tov=tovar.id_tovar ";
$res=fetchAll($sql);

$sql="select sum(pay) as paysum from basket";
$q=fetchArray($sql);
?>
    
    <div id="right_col" class="grid_3">
      <div  class="s_box_1 s_cart_holder">
        <h2 class="s_secondary_color">Shopping Cart</h2>
        <div id="cart_side_contents">
			<div id="tes"  class="s_cart_item">

			</div>
			<span class="clear s_mb_15 border_eee"></span>
			<span class="clear s_mb_15"></span>
			<div class="align_center clearfix">
			</div>
        </div>
      </div>
   <?
		
		$sql="SELECT * from category";
		
		$res=fetchAll($sql);
		?>
	  
	  <div id="categories_module" class="s_box">
        <h2>Категория</h2>
        <div class="s_list_1">
          <ul>  <?
		  foreach($res as $array) {
		  ?>
            <li><a href="listing_1.php?id=<?=$array["id_category"];?>"><?=$array["c_name"];?></a>
		
				
			</li>
				<?}?>
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