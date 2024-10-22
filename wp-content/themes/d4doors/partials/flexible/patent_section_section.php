<!-- Generate by Flexible Module Helper -->
<?php $random__id = lp_generateRandomString(); ?>
<section class="patent_section_section" id="<?= $random__id; ?>">
  <div class="container">
    <div class="patent__row">
      <div class="patent__col">
        <div class="img__wrap">
          <img src="<?= get_sub_field('image')['url']; ?>" alt="">
        </div>
      </div>
      <div class="patent__col">
        <div class="text__wrap">
          <div class="text">
            <h2><?= get_sub_field('title'); ?></h2>
            <p><?= get_sub_field('text'); ?></p>
            <div class="link">
              <?php
              $link = get_sub_field('link');
              if ($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
                <a class="button_container" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                  <div class="button"><?php echo esc_html($link_title); ?></div>
                  <img src="<?= get_template_directory_uri() . '/images/svg/link_arrow.svg' ?>" alt="link arrow">
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
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