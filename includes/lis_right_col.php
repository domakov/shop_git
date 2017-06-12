
	 <?$sql="SELECT * from basket 
		INNER JOIN tovar ON basket.id_tov=tovar.id_tovar
		INNER JOIN foto ON tovar.id_tovar=foto.id_tovar 
		INNER JOIN category ON tovar.t_category = category.id_category 
		Inner join `order` ON  basket.id_ordr=`order`.id_ordr where id_status=1";
		$popular=fetchAll($sql);
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
		   <h2>Санат</h2>
		   <div class="s_list_1">
			  <ul>  
				  <?foreach($res as $array) {?>
					  <li><a href="listing_1.php?id=<?=$array["id_category"];?>"><?=$array["c_name"];?></a>
					  </li>
				  <?}?>
			  </ul>
			</div>
	  </div>
	 
      <div id="bestseller_side" class="s_box clearfix">
        <h2>Белгілілері</h2>
		<?if($popular>0){foreach ($popular as $array){?> 
			<div class="s_item s_size_1 clearfix">
			<a class="s_thumb" href="product.php"><img src="<?=$array["f_link"];?>" width="38" height="38" alt="iPhone 3GS 8GB" /></a>
			<h3><a href="product.php"><?=$array["t_name"];?></a></h3>
			<p><a href="product.php"><span class="s_main_color"><span class="s_currency s_before">KZT</span> <?=$array["pay"];?></span></a></p>
			</div> 
		<?}};?>
      </div>
    </div>