<?php
/* Template Name: Establishment */
 ?>
 <?php get_header(); ?>

     <main class="dukh__banner">
         <div class="banner__content">
             <div class="slider">
               <?php
                  $loop = CFS()->get('slider_element');
                  $count = 1;
                  foreach ($loop as $row) {
                    if ($count == 1) {
                    ?>
                    <div class="slider__item">
                        <img class="slider__img" src="<?= $row['slider_element_photo'] ?>" alt="">
                        <div class="slider__text"><?= $row['slider_element_text'] ?></div>
                    </div>
                    <?php
                    ;}else{?>
                    <div class="slider__item hidden-slide">
                        <img class="slider__img" src="<?= $row['slider_element_photo'] ?>" alt="">
                        <div class="slider__text"><?= $row['slider_element_text'] ?></div>
                    </div>
               <?php
                    }
                  $count++;
                  }
               ?>


                 <a class="prev" onclick="minusSlide()">&#10094;</a>
                 <a class="next" onclick="plusSlide()">&#10095;</a>

                 <div class="slider-dots">
                   <?php
                   $loop = CFS()->get('slider_element');
                   $count = 1;
                   foreach ($loop as $row) {
                   ?>
                   <span class="slider-dots__item" onclick="currentSlide(<?= $count ?>)"></span>
                   <?php
                   $count++;
                   }
                   ?>
                 </div>
             </div>
         </div>

         <div class="main__map-container">
             <a href="#popup-first" class="map__pop-up-frame-first gradient-border">
                 <h4 class="map__title"><span class="map__title-hidden">DUKH </span>Мясницкая</h4>
                 <span class="map__metro map__hidden">Чистые пруды</span>
                 <address>
                     <span class="map__address">Мясницкая 24/7 с1</span>
                     <span class="map__phone map__hidden">+7 (917) 250 95 95</span>
                 </address>
             </a>
             <a href="#popup-second" class="map__pop-up-frame-second gradient-border">
                 <h4 class="map__title"><span class="map__title-hidden">DUKH </span>Страсной</h4>
                 <span class="map__metro map__hidden">Пушкинская</span>
                 <address>
                     <span class="map__address">Страсной бульвар 4 с3</span>
                     <span class="map__phone map__hidden">+7 (917) 295 00 95</span>
                 </address>
             </a>
             <a href="#popup-third" class="map__pop-up-frame-third gradient-border">
                 <h4 class="map__title"><span class="map__title-hidden">DUKH </span>Никитская</h4>
                 <span class="map__metro map__hidden">Арбатская</span>
                 <address>
                     <span class="map__address">Б. Никитская 24/1 с5</span>
                     <span class="map__phone map__hidden">+7 (917) 262 95 95</span>
                 </address>
             </a>

         </div>
     </main>



     <div id="popup-first" class="popup">
         <a href="#dukh__header" class="popup__area"></a>
         <div class="popup__body">
             <div class="popup__content">
                 <a href="#dukh__header" class="popup__close"></a>
                 <address class="popup__address">
                     <div class="popup__address-block">
                         <div class="popup__address-container">
                             <a href="https://yandex.ru/maps/-/CCUynLS~PD"  target="_blank" class="popup__address popup__address-link">DUKH Лубянка</a>
                         </div>
                         <div class="popup__phone">
                             <a class="popup__contact-style" href="tel:+79172509595">+7 (917) 250 95 95</a>
                         </div>
                     </div>
                     <div class="popup__social-block">
                         <ul class="social-icons-list">
                             <li class="social-icon social-icon-email">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">email</span>
                                 </a>
                             </li>
                             <li class="social-icon social-icon-facebook">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">facebook</span>
                                 </a>
                             </li>
                             <li class="social-icon social-icon-instagram">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">instagram</span>
                                 </a>
                             </li>
                             <li class="social-icon social-icon-youtube">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">youtube</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </address>
                 <div class="popup__discription">
                     <p class="popup__discription-text">
                         DUKH Лубянка — знаменитый кальянный бар на улице Мясницкая. “Кальянная Мекка”, “Место зарождения кальянной индустрии”, “Лубянка”, “Первая кальянная”, “Место, где началось развитие кальянной индустрии” — все эти обозначения относятся к DUKH Лубянка.<br><br>
                         Заведение располагается в самом центре столицы недалеко от метро Чистые пруды и Лубянка. Кальянная расположилась на двух этажах, а ее интерьер отражает неформальную сторону столицы, привлекает своей самобытностью и творческим нравом.
                     </p>
                     <div class="popup__images-container">
                         <div class="popup__images-item">
                             <a href="<?= CFS()->get('photo_myasnitskaya_left');?>" data-lightbox="popup-first">
                             <img class="popup__img popup__rotate-left" src="<?= CFS()->get('photo_myasnitskaya_left');?>" alt="">
                         </a>
                         </div>
                         <div class="popup__images-item">
                             <a href="<?= CFS()->get('photo_myasnitskaya_center');?>" data-lightbox="popup-first">
                             <img class="popup__img popup-first__rotate-not" src="<?= CFS()->get('photo_myasnitskaya_center');?>" alt="">
                         </a>
                         </div>
                         <div class="popup__images-item">
                             <a href="<?= CFS()->get('photo_myasnitskaya_right');?>" data-lightbox="popup-first">
                             <img class="popup__img popup-first__rotate-right" src="<?= CFS()->get('photo_myasnitskaya_right');?>" alt="">
                         </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div id="popup-second" class="popup">
         <a href="#dukh__header" class="popup__area"></a>
         <div class="popup__body">
             <div class="popup__content">
                 <a href="#dukh__header" class="popup__close"></a>
                 <address class="popup__address">
                     <div class="popup__address-block">
                         <div class="popup__address-container">
                             <a href="https://yandex.ru/maps/-/CCUynLS~PD"  target="_blank" class="popup__address popup__address-link">DUKH Страстной</a>
                         </div>
                         <div class="popup__phone">
                             <a class="popup__contact-style" href="tel:+79172950095">+7 (917) 295 00 95</a>
                         </div>
                     </div>
                     <div class="popup__social-block">
                         <ul class="social-icons-list">
                             <li class="social-icon social-icon-email">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">email</span>
                                 </a>
                             </li>
                             <li class="social-icon social-icon-facebook">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">facebook</span>
                                 </a>
                             </li>
                             <li class="social-icon social-icon-instagram">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">instagram</span>
                                 </a>
                             </li>
                             <li class="social-icon social-icon-youtube">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">youtube</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </address>
                 <div class="popup__discription">
                     <p class="popup__discription-text popup-second__discription-text">
                         DUKH Страстной — премиальный кальянный бар музейного формата в старорусском стиле на Страстном бульваре. Интерьер заведения выполнен в лучших традициях аристократического клуба: изысканная мебель, роскошные предметы искусства, камин.<br><br>
                         Особый шарм кальянному бару придаёт картинная галерея, передающая атмосферу русского духа. Специально для нашего заведения была написана копия печально известной картины “Слепцы” 1979 года Валентина Захарченко. Дом, в котором находилась мастерская художника в Одессе, был признан аварийным, а при переезде в новое помещение выяснилось, что полотно невозможно вынести из дома - масляная краска более, чем за 40 лет зацементировалась. В связи с чем, было принято решение распилить картину.
                     </p>
                     <div class="popup__images-container">
                         <div class="popup__images-item">
                             <a href="<?= CFS()->get('photo_strasnoy_left');?>" data-lightbox="popup-second">
                             <img class="popup__img popup__rotate-left" src="<?= CFS()->get('photo_strasnoy_left');?>" alt="">
                         </a>
                         </div>
                         <div class="popup__images-item">
                             <a href="<?= CFS()->get('photo_strasnoy_center');?>" data-lightbox="popup-second">
                             <img class="popup__img popup-second__rotate-not" src="<?= CFS()->get('photo_strasnoy_center');?>" alt="">
                         </a>
                         </div>
                         <div class="popup__images-item">
                             <a href="<?= CFS()->get('photo_strasnoy_right');?>" data-lightbox="popup-second">
                             <img class="popup__img popup-second__rotate-right" src="<?= CFS()->get('photo_strasnoy_right');?>" alt="">
                         </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>

     <div id="popup-third" class="popup">
         <a href="#dukh__header" class="popup__area"></a>
         <div class="popup__body">
             <div class="popup__content">
                 <a href="#dukh__header" class="popup__close"></a>
                 <address class="popup__address">
                     <div class="popup__address-block">
                         <div class="popup__address-container">
                             <a href="https://yandex.ru/maps/-/CCUynLS~PD"  target="_blank" class="popup__address popup__address-link">DUKH Никитская</a>
                         </div>
                         <div class="popup__phone">
                             <a class="popup__contact-style" href="tel:+79172629595">+7 (917) 262 95 95</a>
                         </div>
                     </div>
                     <div class="popup__social-block">
                         <ul class="social-icons-list">
                             <li class="social-icon social-icon-email">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">email</span>
                                 </a>
                             </li>
                             <li class="social-icon social-icon-facebook">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">facebook</span>
                                 </a>
                             </li>
                             <li class="social-icon social-icon-instagram">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">instagram</span>
                                 </a>
                             </li>
                             <li class="social-icon social-icon-youtube">
                                 <a class="icon-link" href="about:blank" target="_blank">
                                     <span class="popup__hidden">youtube</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </address>
                 <div class="popup__discription">
                     <p class="popup__discription-text">
                         DUKH Никитская — роскошный кальянный бар музейного формата на Большой Никитской. Здесь прошлое тесно переплетается с настоящим. Интерьер в старорусском стиле с собственной картинной галереей, скульптурами и камином пребывает в гармонии с современными технологиями на барной и кальянной станциях.
                     </p>
                     <div class="popup__images-container">
                         <div class="popup__images-item">
                             <a href="<?= CFS()->get('photo_nikitskaya_left');?>" data-lightbox="popup-third">
                             <img class="popup__img popup__rotate-left" src="<?= CFS()->get('photo_nikitskaya_left');?>" alt="">
                         </a>
                         </div>
                         <div class="popup__images-item popup__img-hidden">
                             <a href="<?= CFS()->get('photo_nikitskaya_center');?>" data-lightbox="popup-third">
                             <img class="popup__img popup__rotate-not" src="<?= CFS()->get('photo_nikitskaya_center');?>" alt="">
                             </a>
                         </div>
                         <div class="popup__images-item popup__img-hidden-extra">
                             <a href="<?php echo get_template_directory_uri();?>/assets/images/1arbat-slide2.png" data-lightbox="popup-third">
                             <img class="popup__img  popup__rotate-not" src="<?php echo get_template_directory_uri();?>/assets/images/1arbat-slide2.png" alt="">
                             </a>
                         </div>
                         <div class="popup__images-item">
                             <a href="<?= CFS()->get('photo_nikitskaya_right');?>" data-lightbox="popup-third">
                             <img class="popup__img popup__rotate-right" src="<?= CFS()->get('photo_nikitskaya_right');?>" alt="">
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         </div>
     </div>
 <?php get_footer(); ?>
