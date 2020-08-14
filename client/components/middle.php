<div class="col-lg-5 mt-4">
    <!-- <div class="hero__search my-sm-1 mt-lg-1">
        <div class="hero__search__form">
            <form action="#">
            <input type="text" placeholder="Termen de căutat/Поиск по продуктам">
            <button type="submit" class="site-btn" style="color:black;">Caută/ Поиск</button>
            </form>
        </div>
    </div> -->
    <div class="search">
          <form class="search-form">
              <input type="text" <?php if(check_lang_ru()):?> placeholder="Поиск" <?php else:?> placeholder="Termeni de cautare"<?php endif;?> >
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

<div class="col-lg-2 mt-4 mr-1">
    <div class="hero__search__phone">
        <div class="hero__search__phone__icon">
            <i class="fa fa-phone"></i>
        </div>
        <div class="hero__search__phone__text">
            <b><h6>+373123456789</h6></b>
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


<div class="col-lg-1 mr-5 mt-4">
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


<div class="col-lg-1 ml-1 mt-4">
    <div class="menu-bar my-sm-1 ">
        <ul class="mt-sm-0">
            <a href="./shoping-cart.php"><li><i class="fa fa-shopping-cart"></i></li></a>
        </ul>
    </div>
</div>