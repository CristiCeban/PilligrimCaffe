<div class="col-lg-5 mt-4">
    <div class="search">
          <form class="search-form" action="shop_grid.php" method="POST" >
              <input minlength="3" name="search" type="text" <?php if(check_lang_ru()):?> placeholder="Поиск по продуктам" <?php else:?> placeholder="Termeni de cautare"<?php endif;?> >
              <input style="width: 68px" type="submit"
                  <?php if(check_lang_ru()):?>
                        value="Поиск"
                <?php else:?>
                        value="Cauta"
                <?php endif;?>
              >

          </form>
    </div>
</div>

<div class="bar-options col-lg-2 mt-4 mr-1">
    <div class="hero__search__phone">
        <div class="hero__search__phone__icon">
            <i class="fa fa-phone"></i>
        </div>
        <div class="hero__search__phone__text">
            <b><h6>123456789</h6></b>
            <span>

                <?php if(check_lang_ru()):?>
                    техподдержка
                <?php else:?>
                    suport 24/7
                <?php endif;?>
            </span>
        </div>
    </div>
</div>


<div class="bar-options col-lg-1 mr-5 mt-4 contacts">
    <a style=
       "color:black !important;
                                            font-size: 20px;
                                            "
       href="./contact.php">
        <?php if(check_lang_ru()):?>
            Контакты
        <?php else:?>
            Contacte
        <?php endif;?>
    </a>
</div>


<div class="bar-options col-lg-1 ml-1 mt-4">
    <div class="menu-bar my-sm-1 ">
        <ul class="mt-sm-0">
            <a href="./shoping-cart.php"><li><i class="fa fa-shopping-cart"></i></li></a>
        </ul>
    </div>
</div>