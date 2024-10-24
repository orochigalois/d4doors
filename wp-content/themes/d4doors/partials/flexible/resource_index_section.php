<!-- Generate by Flexible Module Helper -->
<?php $random__id = lp_generateRandomString(); ?>
<section class="resource_index_section" id="<?= $random__id; ?>">
  <div class="container">
    <div class="filter__resource">
      <div class="filter__btn">
        FILTERED BY: <span>All</span>
      </div>
      <div class="filter__content">
        <?php
        $terms = get_terms(array(
          'taxonomy' => 'resource-type',
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
        // Query for all posts of post type 'resource'
        $args = array('post_type' => 'resource', 'posts_per_page' => -1);
        $loop = new WP_Query($args);
        $post_count = $loop->found_posts; // Get the total number of posts
        wp_reset_query();
        ?>
        <span><?= $post_count; ?></span> Results
      </div>

    </div>

    <div class="table__header">
      <div class="title">Name</div>
      <div class="tags">Resource type</div>
    </div>
    <div class="result__masonry__resource">
      <?php
      $args = array('post_type' => 'resource', 'posts_per_page' => -1);
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
        $type__terms = get_the_terms(get_the_ID(), 'resource-type');
      ?>
        <?php if ($type__terms): ?>
          <div class="grid-item <?php
                                foreach ($type__terms as $term) {
                                  if (isset($term))
                                    echo 'type__' . $term->slug . ' ';
                                } ?>">
            <div class="title">
              <?= get_the_title(); ?>
            </div>
            <div class="right">
              <div class="tags"><?php foreach ($type__terms as $term) {
                                  if (isset($term))
                                    echo '<div class="tag">' . $term->name . '</div>';
                                } ?></div>
              <div class="download">
                <?php
                $link = get_field('link');
                if ($link):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                  <a class="button_download_container" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                    <div class="button">DOWNLOAD</div>
                    <img src="<?= get_template_directory_uri() . '/images/svg/download.svg' ?>" alt="download icon">
                  </a>
                <?php endif; ?>
              </div>
            </div>


          </div>
        <?php endif; ?>
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