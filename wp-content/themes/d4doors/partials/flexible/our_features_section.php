<!-- Generate by Flexible Module Helper -->
<?php $random__id = lp_generateRandomString(); ?>
<?php if (get_sub_field('highlight_width')) : ?>
  <style>
    #<?= $random__id; ?> .highlight__text span::after {
      width: <?= get_sub_field('highlight_width'); ?>%;
      transform: rotate(-<?= get_sub_field('highlight_angle'); ?>deg);
    }
  </style>
<?php endif; ?>
<section class="our_features_section" id="<?= $random__id; ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title d4_title">
          <?= get_sub_field('title'); ?>
        </div>
      </div>
    </div>
    <div class="row layer2">
      <div class="col-lg-6">
        <div class="layer2-left highlight__text">
          <p class="fg"><?= get_sub_field('text'); ?></p>
          <p class="bg"><?= wrapMatchWithSpans(get_sub_field('text'), get_sub_field('highlight')); ?></p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="layer2-right">
          <?= get_sub_field('wysiwyg'); ?>
        </div>

      </div>
    </div>
    <div class="row__tiles">
      <?php
      if (have_rows('repeater')):
        $counter = 1; // Initialize a counter to track tile positions
        while (have_rows('repeater')) :  ?>
          <?php if ($counter == 3 || $counter == 4 || $counter == 5) : ?>
            <div class="tile__wrap dummy">
              <div class="tile">
                <p>Dummy Tile <?= $counter; ?></p>
              </div>
            </div>
          <?php else:
            the_row(); ?>
            <div class="tile__wrap">
              <div class="tile">
                <img src="<?= get_sub_field('image')['url']; ?>" alt="">
                <div class="copy">
                  <p><?= get_sub_field('text'); ?></p>
                  <h3><?= get_sub_field('title'); ?></h3>
                </div>
              </div>
            </div>

          <?php endif; ?>

          <?php
          // Increment the counter, reset after 8 tiles
          $counter++;
          if ($counter > 8) {
            $counter = 1;
          }
          ?>
      <?php endwhile;
      endif;
      ?>

    </div>
  </div>
</section>
<?php if (get_sub_field('padding_top')) : ?>
  <style>
    #<?= $random__id; ?> {
      padding-top: <?= get_sub_field('padding_top'); ?>px !important;
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom')) : ?>
  <style>
    #<?= $random__id; ?> {
      padding-bottom: <?= get_sub_field('padding_bottom'); ?>px !important;
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_576')) : ?>
  <style>
    @media only screen and (min-width: 576px) {
      #<?= $random__id; ?> {
        padding-top: <?= get_sub_field('padding_top_576'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_576')) : ?>
  <style>
    @media only screen and (min-width: 576px) {
      #<?= $random__id; ?> {
        padding-bottom: <?= get_sub_field('padding_bottom_576'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_768')) : ?>
  <style>
    @media only screen and (min-width: 768px) {
      #<?= $random__id; ?> {
        padding-top: <?= get_sub_field('padding_top_768'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_768')) : ?>
  <style>
    @media only screen and (min-width: 768px) {
      #<?= $random__id; ?> {
        padding-bottom: <?= get_sub_field('padding_bottom_768'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_1024')) : ?>
  <style>
    @media only screen and (min-width: 1024px) {
      #<?= $random__id; ?> {
        padding-top: <?= get_sub_field('padding_top_1024'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_1024')) : ?>
  <style>
    @media only screen and (min-width: 1024px) {
      #<?= $random__id; ?> {
        padding-bottom: <?= get_sub_field('padding_bottom_1024'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_1280')) : ?>
  <style>
    @media only screen and (min-width: 1280px) {
      #<?= $random__id; ?> {
        padding-top: <?= get_sub_field('padding_top_1280'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_1280')) : ?>
  <style>
    @media only screen and (min-width: 1280px) {
      #<?= $random__id; ?> {
        padding-bottom: <?= get_sub_field('padding_bottom_1280'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_1440')) : ?>
  <style>
    @media only screen and (min-width: 1440px) {
      #<?= $random__id; ?> {
        padding-top: <?= get_sub_field('padding_top_1440'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_1440')) : ?>
  <style>
    @media only screen and (min-width: 1440px) {
      #<?= $random__id; ?> {
        padding-bottom: <?= get_sub_field('padding_bottom_1440'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_1920')) : ?>
  <style>
    @media only screen and (min-width: 1920px) {
      #<?= $random__id; ?> {
        padding-top: <?= get_sub_field('padding_top_1920'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_1920')) : ?>
  <style>
    @media only screen and (min-width: 1920px) {
      #<?= $random__id; ?> {
        padding-bottom: <?= get_sub_field('padding_bottom_1920'); ?>px !important;
      }
    }
  </style>
<?php endif; ?>