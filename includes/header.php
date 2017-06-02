  <?
  include_once('functions/db_conn.php');
  ?>
  <div id="header" class="container_12">
    <div class="grid_12">
    
    	<a id="site_logo" href="index.php">Shoppica store - Premium e-Commerce Theme</a> 

      <div id="system_navigation" class="s_nav">
        <ul class="s_list_1 clearfix">
          <li><a href="index.php">Главная</a></li>
          <li><a href="login.php">Авторизоваться</a></li>
          <li><a href="cart.php">Корзина</a></li>
          <li><a href="static.php">О нас</a></li>
          <li><a href="contacts.php">контакт</a></li>
        </ul>
      </div>

      <div id="site_search">
      	<a id="show_search" href="javascript:;" title="Search:"></a>
        <div id="search_bar" class="clearfix">
          <input type="text" id="filter_keyword" />
          <select id="filter_category_id">
            <option value="0">Барлық санаттар</option>
            <option value="1">Санат 1</option>
            <option value="2">Санат 2</option>
          </select>
          <a class="s_button_1 s_secondary_color_bgr"><span class="s_text">Go</span></a> <a class="s_advanced s_main_color" href="">Кеңейтілген іздеу</a>
        </div>
      </div>
      
      <div id="language_switcher" class="s_switcher"> 
	  <span class="s_selected">Доллар</span>
        <ul class="s_options">
          <li><a href="">Теңге</a></li>
          <li><a href="">Евро</a></li>
          <li><a href="">Доллар</a></li>
        </ul>
      </div>
      
      <div id="currency_switcher" class="s_switcher"> <span class="s_selected"><img src="images/flags/gb.png" alt="English" /> английский</span>
        <ul class="s_options">
          <li><a href=""><img src="images/flags/gb.png" alt="English" /> английский</a></li>
          <li><a href=""><img src="images/flags/de.png" alt="Deutsch" /> немецкий</a></li>
        </ul>
      </div>
		<?
		
		$sql="SELECT * from category";
		
		$res=fetchAll($sql);
		?>
	
	
      <div id="categories" class="s_nav">
        <ul>
          <li id="menu_home"> <a href="index.php">Басты бет</a> </li>
		  <?
		  foreach($res as $array) {
		  ?>
          <li> <a href="listing_1.php?id=<?=$array["id_category"];?>"><?=$array["c_name"];?></a>
            <div class="s_submenu">
              <h3>Электроника ішінде</h3>
              <ul class="s_list_1 clearfix">
                <li> <a href="listing_1.php">Сандық фотоаппарат</a>
                  <ul class="s_list_1 clearfix">
                    <li><a href="listing_1.php">Шағын камералар</a></li>
                    <li><a href="listing_1.php">сандық айналым</a></li>
                  </ul>
                </li>
                <li><a href="listing_1.php">Басты бет аудио</a></li>
                <li><a href="listing_1.php">Үй кинотеатры</a></li>
                <li><a href="listing_1.php">Ұялы телефондар</a></li>
                <li><a href="listing_1.php">MP3 Ойыншылар</a></li>
                <li><a href="listing_1.php">Аудио</a></li>
              </ul>
              <span class="clear border_eee"></span>
              <h3>Электроника  брендтер</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Canon</a></li>
                <li><a href="listing_1.php">Hugo Boss</a></li>
                <li><a href="listing_1.php">Panasonic</a></li>
                <li><a href="listing_1.php">Samsung</a></li>
                <li><a href="listing_1.php">Sony</a></li>
              </ul>
            </div>
          </li>		
		  <?}?>
        </ul>
      </div>
      
      <div id="cart_menu" class="s_nav">
      	<a href="cart.php"><span class="s_icon"></span> <small class="s_text">Кәрзеңке</small><span class="s_grand_total s_main_color">$0.00</span></a>
        <div class="s_submenu s_cart_holder">
          <p class="s_mb_0">0 элементтер</p>
        </div>
      </div>
      
    </div>
  </div>