<footer id="dukh__footer">
    <div class="footer__menu-logo">
        <div class="footer__menu">
          <?php wp_nav_menu(array(
              'theme_location' => 'bottom',
              'container' => null,
              'menu_class' => 'flex_footer__menu-list',
              'after' => '<span>/</span>'
          )) ?>
        </div>
        <div class="footer__logo">
            <a href="index.html" class="footer__logo-link">
                <img class="footer__img-sign" src="<?php echo get_template_directory_uri();?>/assets/images/Крест_w.png" alt="Символ логотипа">
                <img class="footer__img-dukh" src="<?php echo get_template_directory_uri();?>/assets/images/DUKH_w.png" alt="Логотип DUKH">
            </a>
        </div>
        <div class="footer__menu footer__menu-extra">
            <ul class="menu__list menu__list-extra">
                <li class="footer__menu-item"><a href="#0" class="footer__menu-item-link footer__menu-item-link-special">разработка сайта ONE WAY</a></li>
            </ul>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>
