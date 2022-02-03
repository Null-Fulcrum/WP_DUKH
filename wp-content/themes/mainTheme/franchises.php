<?php
/* Template Name: Franchises */
 ?>

<?php get_header(); ?>

    <main class="dukh__main">
      <?php
        $filepath = CFS()->get('logo_photo');
      ?>
        <div class="main__banner" style="background-image: url(<?= $filepath ?>)">
            <h1 class="main__banner-title" style=""> Франшиза<br><span class="main__banner-title-item">DUKH</span></h1>
        </div>

        <div class="main__discription">
          <?= CFS()->get('franchise_description');?>
        </div>

        <div class="main__cards">
            <h3 class="main__block-title">Выгода и стоимость открытия</h3>
            <div class="cards__container">
              <?php
              $loop = CFS()->get('franchise_card');
              foreach ($loop as $row) {
                ?>
                <div class="cards__item">
                    <h4 class="cards__item-title" ><?= $row['card_title'] ?></h4>
                    <span class="cards__item-text">Стоимость франшизы</span>
                    <span class="cards__price"><?=  $row['card_price'] ?> ₽</span>
                    <span class="cards__cost">Роялти<br><?=  $row['card_royalty'] ?></span>
                    <span class="cards__cost">Мин. бюджет<br><?= $row['card_min_budget'] ?> ₽</span>
                    <span class="cards__cost">Возможная прибыль<br><?=  $row['card_possible_profit'] ?> ₽ *</span>
                    <div class="cards__button-container">
                        <a href="#form" class="cards__link">
                            <button class="cards__button button" type="submit">Оформить
                            </button>
                        </a>
                    </div>
                </div>
                <?php
              }
              ?>
            </div>
            <p class="cards__disclaimer">* Приведена ориентировочная окупаемость.<br>На выручку влияет множество факторов. В разных регионах могут отличаться ... и культура потребления
            </p>
        </div>


        <div class="main__stats">
            <h3 class="main__block-title">Финансовые показатели</h3>
            <div class="main__stats-container">
              <?php
              $loop = CFS()->get('card_finanses');
              foreach ($loop as $row) {
              ?>
              <div class="main-stats__info-block">
                  <span class="info-block__digit">
                      <?= $row['card_finanses_title'] ?>
                  </span>
                  <p class="info-block__discription">
                      <?= $row['card_finanses_description'] ?>
                  </p>
              </div>
              <?php
              }
                ?>
            </div>
        </div>


        <div class="main__content">
            <?php
            $loop = CFS()->get('card_advantage');
            $count = 1;
            foreach ($loop as $row) {
              ?>
              <div class="content__info-card">
                  <span class="info-card__digit">
                      <?= $count ?>
                  </span>
                  <span class="info-card__title">
                    <?= $row['card_advantage_title'] ?>
                  </span>
                  <p class="info-card__discription">
                    <?= $row['card_advantage_description'] ?>
                  </p>
              </div>
            <?php
            $count++;
            }
             ?>
        </div>

        <div class="main__services-list">
            <h3 class="main__block-title main__services-title">Вы получаете полноценный пакет услуг </h3>
            <ul class="services-list__items">
              <?php
              $loop = CFS()->get('services_list');
              foreach ($loop as $row) {
                ?>
                  <li class="services-list__item"><?= $row['services_list_element_text'] ?></li>
                <?php
              }
               ?>
            </ul>
        </div>


        <div class="main__feedback" id="form">
          <h3 class="main__block-title feedback__title">Заполните форму связи</h3>
          <form action="<?= admin_url('admin-ajax.php?action=send_mail')?>" name="form" class="send_email" method="POST">
                  <label class="feedback__label">
                      <input class="feedback__name input" id="name" name="name" type="text" placeholder="Имя">
                  </label>
                  <label class="feedback__label">
                      <input class="feedback__city input" id="city" name="city" type="text" placeholder="Город">
                  </label>
                  <label class="feedback__label">
                      <input class="feedback__budget input" id="budget" name="budget" type="number" placeholder="Ваш бюджет">
                  </label>
                  <label class="feedback__label">
                      <input class="feedback__phone input" id="phone" name="phone" type="tel" name="phone" placeholder="Телефон">
                  </label>
                  <label class="feedback__label">
                      <input class="feedback__e-mail input" id="mail" name="mail" type="email" placeholder="E-mail" required>
                  </label>
                  <label class="feedback__label">
                      <textarea class="feedback__desctiption input" id="comment" name="comment" placeholder="Комментарий"></textarea>
                  </label>
                  <div class="feedback__button-container">
                      <button class="feedback__button button" type="submit">Отправить
                      </button>
                  </div>
              </form>

        </div>
    </main>

<?php get_footer(); ?>
