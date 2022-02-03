<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUKH О нас</title>
</head>
<body>

    <div class="buy-button__container">

        <a href="/franchises#form" class="buy-button__link">
            <button class="buy-button__button button custom-btn" type="submit">Купить франшизу
            </button>
        </a>
    </div>


    <header id="dukh__header">
    <!-- <header class="dukh__header"> -->
        <div class="header__menu-logo">
            <div class="header__logo">
                <a href="<?= get_home_url(); ?>" class="logo__link">
                    <img class="logo__img-sign" src="<?php echo get_template_directory_uri();?>/assets/images/Крест.png" alt="Символ логотипа">
                    <img class="logo__img-dukh" src="<?php echo get_template_directory_uri();?>/assets/images/DUKH.png" alt="Логотип DUKH">
                </a>
            </div>
            <div class="header__button-menu">
                <span></span>
            </div>
            <div class="header__menu">
              <?php wp_nav_menu(array(
                  'theme_location' => 'top',
                  'container' => null,
                  'menu_class' => 'flex_menu__list'
              )) ?>

            </div>
        </div>
        <?php wp_head();?>
    </header>
