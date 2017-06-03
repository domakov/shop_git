	<?
	include_once('functions/db_conn.php');
	$sql="SELECT * from category";
	$res=fetchAll($sql);?>
	
 <div id="footer" class="container_12">
    <div id="footer_categories" class="clearfix">
	 <?
		  foreach($res as $array) {
		  ?>
      <div class="grid_2">
	 
        <a href="listing_1.php?id=<?=$array["id_category"];?>" style="font-size:16px;color:rgb(255, 153, 0);"><?=$array["c_name"];?></a>
        <ul class="s_list_1">
          <li><a href="">Камера</a></li>
          <li><a href="">Аудио</a></li>
          <li><a href="">Кинотеатр</a></li>
          <li><a href="">Ұялы телефондар</a></li>
          <li><a href="">MP3</a></li>
          <li><a href="">Автокөлік аудиосы</a></li>
        </ul>
      </div>
     <?}?>
      <div class="clear"></div>
      <div class="grid_12 border_eee"></div>
    </div>
    <div id="payments" class="right clearfix">
      <img src="images/payments/discover_straight_32px.png" alt="" />
      <img src="images/payments/american_express_straight_32px.png" alt="" />
      <img src="images/payments/moneybookers_straight_32px.png" alt="" />
      <img src="images/payments/paypal_straight_32px.png" alt="" />
      <img src="images/payments/visa_straight_32px.png" alt="" />
      <img src="images/payments/american_express_straight_32px.png" alt="" />
    </div>
    <p id="copy">&copy; Copyright <?=date('Y')?>. Powered by <a class="blue" href="">APK 301IS</a>.<br /> <a class="s_main_color" href="#">Shoppica theme</a> made by <a href="">301 is</a></p>
  </div>