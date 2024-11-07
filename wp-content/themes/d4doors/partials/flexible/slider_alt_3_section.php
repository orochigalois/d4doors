<!-- Generate by Flexible Module Helper -->
<?php $random__id = lp_generateRandomString(); ?>
<section class="slider_alt_3_section" id="<?= $random__id; ?>">
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
    <div class="slider__alt3">
      <div class="nav__button">
        <div class="prev disabled">
          <img class="gray" src="<?= get_template_directory_uri(); ?>/images/svg/prevbb.svg" alt="prev">
          <img class="orange" src="<?= get_template_directory_uri(); ?>/images/svg/prev.svg" alt="prev">
        </div>
        <div class="next">
          <img src="<?= get_template_directory_uri(); ?>/images/svg/next.svg" alt="next">
        </div>
      </div>
      <div class="slider-class">
        <?php
        $blogs = get_sub_field('blogs');
        // Check if the field is empty
        if (empty($blogs)) {
          // If the field is empty, query the latest 3 'project' posts
          $args = array(
            'post_type'      => 'blog', // Replace 'project' with your custom post type slug
            'posts_per_page' => 3,         // Limit to the latest 3 projects
            'orderby'        => 'date',
            'order'          => 'DESC'
          );
          $blogs_query = new WP_Query($args);

          // Check if we have posts to display
          if ($blogs_query->have_posts()) {
            while ($blogs_query->have_posts()) {
              $blogs_query->the_post();
        ?>
              <a href="<?php echo esc_url(get_permalink()); ?>" class="item">
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
            }
            wp_reset_postdata(); // Reset global post data after the loop
          } else {
            echo '<p>No blog found.</p>';
          }
        } else {

          // If the field is not empty, display the selected projects
          foreach ($blogs as $blog) {
            $flexible_content = get_field('flexible', $blog->ID);
            ?>
            <a href="<?php echo esc_url(get_permalink($blog->ID)); ?>" class="item">
              <div class="img__wrap">
                <img src="<?= get_the_post_thumbnail_url($blog->ID, 'full') ?>" alt="">
                <div class="mask"></div>
                <div class="item__tags">
                  <?php
                  $terms = get_the_terms($blog->ID, 'blog-type')
                  ?>
                  <?php foreach ($terms as $term) : ?>
                    <p class="tag"><?= $term->name; ?></p>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="item__title">
                <?= get_the_title($blog->ID); ?>
              </div>
              <div class="item__excerpt">
                <?= get_the_excerpt($blog->ID); ?>
              </div>
            </a>
        <?php
          }
          wp_reset_postdata(); // Reset post data after all projects have been processed
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