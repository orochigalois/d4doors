<!-- Generate by Flexible Module Helper -->
<?php $random__id = lp_generateRandomString(); ?>
<section class="slider_alt_2_section" id="<?= $random__id; ?>">
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
    <div class="slider__alt2">
      <div class="slider-class">
        <?php
        $projects = get_sub_field('projects');
        // Check if the field is empty
        if (empty($projects)) {
          // If the field is empty, query the latest 3 'project' posts
          $args = array(
            'post_type'      => 'project', // Replace 'project' with your custom post type slug
            'posts_per_page' => 3,         // Limit to the latest 3 projects
            'orderby'        => 'date',
            'order'          => 'DESC'
          );
          $projects_query = new WP_Query($args);

          // Check if we have posts to display
          if ($projects_query->have_posts()) {
            while ($projects_query->have_posts()) {
              $projects_query->the_post();
              $flexible_content = get_field('flexible');
        ?>
              <div class="item">
                <div class="img__wrap">
                  <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="">
                  <div class="mask"></div>
                  <div class="item__title">
                    <h3><?= get_the_title(); ?></h3>
                  </div>
                  <div class="item__tags">
                    <?php
                    if ($flexible_content) {
                      foreach ($flexible_content as $block) {
                        // Check for specific layouts/blocks
                        if ($block['acf_fc_layout'] == 'project_instruction_section') {

                          // Get the 'products' relationship field
                          $products = $block['products'];
                          if ($products) {
                            foreach ($products as $product) {
                              echo '<p class="tag">' . get_the_title($product->ID) . '</p>';
                            }
                          }

                          // Get the 'year' field
                          $year = $block['year'];
                          if ($year) {
                            echo '<p class="tag">' . esc_html($year) . '</p>';
                          }
                        }
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
            <?php
            }
            wp_reset_postdata(); // Reset global post data after the loop
          } else {
            echo '<p>No projects found.</p>';
          }
        } else {

          // If the field is not empty, display the selected projects
          foreach ($projects as $project) {
            $flexible_content = get_field('flexible', $project->ID);
            ?>
            <div class="item">
              <div class="img__wrap">
                <img src="<?= get_the_post_thumbnail_url($project->ID, 'full') ?>" alt="">
                <div class="mask"></div>
                <div class="item__title">
                  <h3><?= get_the_title($project->ID); ?></h3>
                </div>
                <div class="item__tags">
                  <?php
                  if ($flexible_content) {
                    foreach ($flexible_content as $block) {
                      // Check for specific layouts/blocks
                      if ($block['acf_fc_layout'] == 'project_instruction_section') {

                        // Get the 'products' relationship field
                        $products = $block['products'];
                        if ($products) {
                          foreach ($products as $product) {
                            echo '<p class="tag">' . get_the_title($product->ID) . '</p>';
                          }
                        }

                        // Get the 'year' field
                        $year = $block['year'];
                        if ($year) {
                          echo '<p class="tag">' . esc_html($year) . '</p>';
                        }
                      }
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
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