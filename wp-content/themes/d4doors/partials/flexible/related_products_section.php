  <!-- Generate by Flexible Module Helper -->
  <?php $random__id = lp_generateRandomString(); ?>
  <section class="related_products_section" id="<?= $random__id; ?>">
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
          <div class="layer2-left">
            <?= get_sub_field('subtitle'); ?>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="layer2-right">
            <?= get_sub_field('wysiwyg'); ?>
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
      <div class="slider__alt4">
        <div class="slider-class">
          <?php
          $products = get_sub_field('products');

          // If the field is not empty, display the selected products
          foreach ($products as $product) {
          ?>
            <a href="<?php echo esc_url(get_permalink($product->ID)); ?>" class="tile__wrap">
              <div class="tile">
                <div class="tile__text">
                  <?= get_the_title($product->ID); ?>
                </div>
                <div class="tile__subtext">
                  <?= get_field('subtitle', $product->ID); ?>
                </div>
              </div>
            </a>
          <?php
          }
          ?>
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