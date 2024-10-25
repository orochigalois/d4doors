<!-- Generate by Flexible Module Helper -->
<?php $random__id = lp_generateRandomString(); ?>
<section class="blog_index_section" id="<?= $random__id; ?>">
  <div class="container">
    <div class="filter__blog">
      <div class="filter__btn">
        FILTERED BY: <span>All</span>
      </div>
      <div class="filter__content">
        <?php
        $terms = get_terms(array(
          'taxonomy' => 'blog-type',
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
        // Query for all posts of post type 'blog'
        $args = array('post_type' => 'blog', 'posts_per_page' => -1);
        $loop = new WP_Query($args);
        $post_count = $loop->found_posts; // Get the total number of posts
        wp_reset_query();
        ?>
        <span><?= $post_count; ?></span> Results
      </div>

    </div>


    <div class="result__masonry__blog">
      <?php
      $args = array('post_type' => 'blog', 'posts_per_page' => -1);
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
      ?>

        <a href="<?php echo esc_url(get_permalink()); ?>" class="grid-item <?php $blog__terms = get_the_terms(get_the_ID(), 'blog-type');
                                                                            foreach ($blog__terms as $term) {
                                                                              if (isset($term))
                                                                                echo 'type__' . $term->slug . ' ';
                                                                            } ?>">
          <div class="img__wrap">
            <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="">
            <div class="mask"></div>
            <div class="item__tags">
              <?php
              $terms = get_the_terms(get_the_ID(), 'blog-type')
              ?>
              <?php foreach ($terms as $term) : ?>
                <p class="tag"><?= $term->name; ?></p>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="item__title">
            <h3><?= get_the_title(); ?></h3>
          </div>
          <div class="item__excerpt">
            <p><?= get_the_excerpt(); ?></p>
          </div>
        </a>

      <?php

      endwhile;
      wp_reset_query();

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