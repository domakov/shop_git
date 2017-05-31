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
      
      <div id="categories" class="s_nav">
        <ul>
          <li id="menu_home"> <a href="index.php">Басты бет</a> </li>
          <li> <a href="listing_1.php">Электроника</a>
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
          <li> <a href="listing_1.php">Компьютерлер</a>
            <div class="s_submenu">
              <h3>Inside Computers</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Үстелдік компьютерлер</a></li>
                <li><a href="listing_1.php">ноутбуктер</a></li>
                <li><a href="listing_1.php">Мониторлар</a></li>
                <li><a href="listing_1.php">компоненттері</a></li>
                <li><a href="listing_1.php">Бағдарламалық қамтамасыз ету</a></li>
              </ul>
              <span class="clear border_eee"></span>
              <h3>Компьютерлік брендтер</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Hugo Boss</a></li>
                <li><a href="listing_1.php">Sony</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.php">Киім</a>
            <div class="s_submenu">
              <h3>Киім</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Әйелдер киімі</a></li>
                <li><a href="listing_1.php">Ерлер киімі</a></li>
                <li><a href="listing_1.php">Ұл балалалр</a></li>
                <li><a href="listing_1.php">Қыз балалар</a></li>
                <li><a href="listing_1.php">Нәрестелер</a></li>
              </ul>
              <span class="clear border_eee"></span>
              <h3>Киім брендтер</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Bvlgari</a></li>
                <li><a href="listing_1.php">Elisabeth Arden</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.php">Аяқ киім</a>
            <div class="s_submenu">
              <h3>Аяқ киім ішінде</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Әйелдер аяқ киімі</a></li>
                <li><a href="listing_1.php">Ерлер аяқ киімі</a></li>
                <li><a href="listing_1.php">Балалар аяқ киімі</a></li>
                <li><a href="listing_1.php">Спорттық аяқ киім</a></li>
              </ul>
              <span class="clear border_eee"></span>
              <h3>Аяқ киім бренді</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Adidas</a></li>
                <li><a href="listing_1.php">Apple</a></li>
                <li><a href="listing_1.php">Armani</a></li>
                <li><a href="listing_1.php">Balenciaga</a></li>
                <li><a href="listing_1.php">Christian Dior</a></li>
                <li><a href="listing_1.php">Nike</a></li>
                <li><a href="listing_1.php">Samsung</a></li>
                <li><a href="listing_1.php">Sony</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.php">Сыйлықтар</a>
            <div class="s_submenu">
              <h3>Сыйлықтар ішінде</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Парфюмерия</a></li>
                <li><a href="listing_1.php">Рух пен сыра</a></li>
                <li><a href="listing_1.php">Шарап</a></li>
                <li><a href="listing_1.php">Гүлдер</a></li>
                <li><a href="listing_1.php">Шоколад және тәттілер</a></li>
                <li><a href="listing_1.php">Ойындар мен ойыншықтар</a></li>
                <li><a href="listing_1.php">Үй жануарлары</a></li>
              </ul>
              <span class="clear border_eee"></span>
              <h3>брендтік сыйлықтар</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Adidas</a></li>
                <li><a href="listing_1.php">Armani</a></li>
                <li><a href="listing_1.php">Balenciaga</a></li>
                <li><a href="listing_1.php">Bvlgari</a></li>
                <li><a href="listing_1.php">Canon</a></li>
                <li><a href="listing_1.php">Christian Dior</a></li>
                <li><a href="listing_1.php">Elisabeth Arden</a></li>
                <li><a href="listing_1.php">Hugo Boss</a></li>
                <li><a href="listing_1.php">Sony</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.php">Үй үшін</a>
            <div class="s_submenu">
              <h3>Үй ішінде</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Жиһаз</a></li>
                <li><a href="listing_1.php">Бақ</a></li>
                <li><a href="listing_1.php">Техника</a></li>
                <li><a href="listing_1.php">Жануарларды жеткізу</a></li>
                <li><a href="listing_1.php">Құралдар мен керек-жарақтары</a></li>
                <li><a href="listing_1.php">Жарықтандыру</a></li>
                <li><a href="listing_1.php">Азық-түлік және сусындар</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.php">Денсаулық</a>
            <div class="s_submenu">
              <h3>Денсаулық ішінде</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Қоспалар</a></li>
                <li><a href="listing_1.php">Косметикалар</a></li>
                <li><a href="listing_1.php">Жеке күтім</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.php">Зергерлік</a>
            <div class="s_submenu">
              <h3>Зергерлік ішінде</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Алқалар</a></li>
                <li><a href="listing_1.php">Сақиналар</a></li>
                <li><a href="listing_1.php">Білезіктер</a></li>
                <li><a href="listing_1.php">Сырғалар</a></li>
                <li><a href="listing_1.php">Кулондар</a></li>
              </ul>
            </div>
          </li>
          <li><a href="listing_1.php">Кітаптар</a>
            <div class="s_submenu">
              <h3>Кітап ішінде</h3>
              <ul class="s_list_1 clearfix">
                <li><a href="listing_1.php">Қиял</a></li>
                <li><a href="listing_1.php">Махаббат дастандары</a></li>
                <li><a href="listing_1.php">Ғылыми фантастика</a></li>
                <li><a href="listing_1.php">Оқу</a></li>
              </ul>
            </div>
          </li>
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