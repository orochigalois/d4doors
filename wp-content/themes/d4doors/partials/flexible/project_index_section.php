<!-- Generate by Flexible Module Helper -->
<?php $random__id = lp_generateRandomString(); ?>
<section class="project_index_section" id="<?= $random__id; ?>">
  <div class="container">
    <div class="filter__project">
      <div class="filter__btn">
        FILTERED BY: <span>All</span>
      </div>
      <div class="filter__content">
        <?php
        $terms = get_terms(array(
          'taxonomy' => 'project-state',
          'parent'   => 0,
          'hide_empty' => 0
        ));
        ?>
        <ul>
          <li data-slug="all">All</li>
          <?php
          $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1, // Get all posts
            'post_status'    => 'publish', // Only get published posts
          );

          $products = new WP_Query($args);

          if ($products->have_posts()) {
            while ($products->have_posts()) {
              $products->the_post();

              // Get the slug of the current post
              $slug = get_post_field('post_name', get_the_ID());
          ?>
              <li data-slug="<?= $slug ?>"><?= $slug ?></li>
          <?php
            }
            wp_reset_postdata(); // Restore original post data
          }

          ?>
        </ul>
      </div>
      <div class="filter__number">
        <?php
        // Query for all posts of post type 'project'
        $args = array('post_type' => 'project', 'posts_per_page' => -1);
        $loop = new WP_Query($args);
        $post_count = $loop->found_posts; // Get the total number of posts
        wp_reset_query();
        ?>
        <span><?= $post_count; ?></span> Results
      </div>

    </div>


    <div class="result__masonry__project">
      <?php
      $args = array('post_type' => 'project', 'posts_per_page' => -1);
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
        $flexible_content = get_field('flexible');
      ?>
        <a href="<?php echo esc_url(get_permalink()); ?>" class="grid-item <?php
                                                                      if ($flexible_content) {
                                                                        foreach ($flexible_content as $block) {
                                                                          // Check for specific layouts/blocks
                                                                          if ($block['acf_fc_layout'] == 'project_instruction_section') {

                                                                            // Get the 'products' relationship field
                                                                            $products = $block['products'];
                                                                            $year = $block['year'];
                                                                            if ($products) {
                                                                              foreach ($products as $product) {
                                                                                echo 'prod__' .  get_post_field('post_name', $product->ID) . ' ';
                                                                              }
                                                                            }
                                                                          }
                                                                        }
                                                                      }
                                                                      ?>">
          <div class="tile">
            <div class="img__wrap">
              <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
              <div class="item__tags">
                <?php
                if ($products) {
                  foreach ($products as $product) {
                    echo '<p class="tag">' . get_the_title($product->ID) . '</p>';
                  }
                }
                ?>
              </div>
            </div>
            <?php if ($year): ?>
              <div class="year">
                <?= esc_html($year); ?>
              </div>
            <?php endif; ?>
            <div class="title">
              <h3><?= get_the_title(); ?></h3>
            </div>

          </div>

        </a>

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