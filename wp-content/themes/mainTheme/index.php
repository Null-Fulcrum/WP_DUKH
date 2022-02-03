<?php get_header() ?>

<main class="dukh__main">
  <?php $filepath = CFS()->get('top_page_photo'); ?>
    <div class="dukh__main-banner"style="background-image: url(<?= $filepath ?>);">
        <div class="main-banner__discription">
          <?= CFS()->get('top_page_text'); ?>
        </div>
        <!-- <div class="main-banner__quote">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed.
        </div> -->
    </div>

    <div class="dukh__main-stats">
      <?php $loop = CFS()->get('center_page_card');
        foreach ($loop as $row) {
      ?>
      <div class="main-stats__info-block">
          <span class="info-block__digit">
              <?= $row['center_page_card_title'];  ?>
          </span>
          <p class="info-block__discription">
              <?= $row['center_page_card_description'];  ?>
          </p>
      </div>
      <?php
        }
      ?>
    </div>
</main>

<aside class="dukh__aside">
    <div class="aside__container">
        <div class="aside__container-content">
            <p class="aside__content"><?= CFS()->get('bottom_page_text');?>
            </p>
        </div>
        <div class="aside__container-image">
            <img class="aside__container-img" src="<?= CFS()->get('bottom_page_photo');?>" alt="">
        </div>
    </div>
</aside>

<?php get_footer() ?>
