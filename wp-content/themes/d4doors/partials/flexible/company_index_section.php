<!-- Generate by Flexible Module Helper -->
<?php $random__id = lp_generateRandomString(); ?>
<section class="company_index_section" id="<?= $random__id; ?>">
  <div class="container">
    <div class="filter">
      <div class="filter__btn">
        FILTERED BY: <span>All</span>
      </div>
      <div class="filter__content">
        <?php
        $terms = get_terms(array(
          'taxonomy' => 'company-state',
          'parent'   => 0,
          'hide_empty' => 0
        ));
        ?>
        <ul>
          <li data-slug="all">All</li>
          <?php foreach ($terms as $term) : ?>
            <li data-slug="<?= $term->slug; ?>"><?= $term->name; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="filter__number">
        <?php
        // Query for all posts of post type 'company'
        $args = array('post_type' => 'company', 'posts_per_page' => -1);
        $loop = new WP_Query($args);
        $post_count = $loop->found_posts; // Get the total number of posts
        wp_reset_query();
        ?>
        <span><?= $post_count; ?></span> Results
      </div>

    </div>


    <div class="result__masonry">
      <?php
      $args = array('post_type' => 'company', 'posts_per_page' => -1);
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
      ?>
        <div class="grid-item <?php $state__terms = get_the_terms(get_the_ID(), 'company-state');
                              foreach ($state__terms as $term) {
                                if (isset($term))
                                  echo 'state__' . $term->slug . ' ';
                              } ?>">
          <div class="tile__wrap">
            <div class="tile">
              <div class="content">
                <h3><?= get_the_title(); ?></h3>
                <div class="description">
                  <h4>ADDRESS</h4>
                  <div class="address">
                    <?php
                    $link = get_field('address');

                    if ($link) :
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                      <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                  </div>
                  <div class="working_hours"><?= get_field('working_hours'); ?></div>
                  <h4 class="contact">CONTACT</h4>
                  <div class="phone">
                    <?php
                    $is_free_call = get_field('is_free_call');
                    $link = get_field('phone');

                    if ($link) :
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                      <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                      <?php if ($is_free_call): ?><span>(Free call)</span><?php endif; ?>
                    <?php endif; ?>
                  </div>
                  <div class="website">
                    <?php
                    $link = get_field('website');

                    if ($link) :
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                      <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                  </div>
                  <div class="email">
                    <?php
                    $link = get_field('email');

                    if ($link) :
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                      <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                  </div>
                </div>

              </div>

            </div>

          </div>

        </div>

      <?php

      endwhile;
      wp_reset_query();

      ?>

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