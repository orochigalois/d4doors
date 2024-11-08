<!-- Generate by Flexible Module Helper -->
<?php $random__id = lp_generateRandomString();
$title = get_sub_field('title');
?>
<!-- JavaScript for toggle functionality -->
<script>
  function toggleAccordion(id) {
    var clickedElement = document.getElementById('accordion-' + id);
    var allAccordions = document.querySelectorAll('.accordion__tile');

    allAccordions.forEach(function(accordion) {
      var content = accordion.querySelector('.accordion__content');

      // Close all tiles except the clicked one
      if (accordion !== clickedElement) {
        accordion.classList.remove('open');
        accordion.classList.add('closed');
      }
    });

    // Toggle the clicked tile if it's closed
    var clickedContent = clickedElement.querySelector('.accordion__content');
    if (clickedElement.classList.contains('closed')) {
      clickedElement.classList.add('open');
      clickedElement.classList.remove('closed');
    } else {
      clickedElement.classList.add('closed');
      clickedElement.classList.remove('open');
    }

    // Check the state of all accordion contents
    var allContents = document.querySelectorAll('.accordion__content');
    var anyOpen = Array.from(allContents).some(content => content.parentElement.classList.contains('open'));

    // Toggle 'closed' class on .accordion__title based on the state
    var accordionTitles = document.querySelectorAll('.accordion__title');
    accordionTitles.forEach(title => {
      if (anyOpen) {
        title.classList.add('closed');
      } else {
        title.classList.remove('closed');
      }
    });
  }
</script>
<section class="our_products_section" id="<?= $random__id; ?>">
  <div class="container">
    <div class="row">
      <div class="accordion__wrapper">
        <div class="accordion__title">
          <div class="wrap">
            <div class="title d4_title">
              <?= $title ?>
            </div>
            <h3>
              <?= get_sub_field('title'); ?>
            </h3>
            <p>
              <?= get_sub_field('text'); ?>
            </p>

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
        <?php
        $index = 0;
        if (have_rows('accordion')):
          while (have_rows('accordion')) : the_row();
            $index = $index + 1 ?>
            <div class="accordion__tile closed" id="accordion-<?php echo $index; ?>">
              <div class="accordion__header" onclick="toggleAccordion(<?php echo $index; ?>)">
                <div class="accordion__number">
                  <?= get_sub_field('acc_title'); ?>
                </div>
                <div class="accordion__text">
                  <?= get_sub_field('acc_text'); ?>
                </div>
              </div>
              <div class="accordion__content">
                <h3>
                  <?= get_sub_field('title'); ?>
                </h3>
                <p>
                  <?= get_sub_field('text'); ?>
                </p>

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
                <?php if (get_sub_field('image')): ?>
                  <div class="img__grandparent">
                    <div class="img__wrap">
                      <img src="<?= get_sub_field('image')['url']; ?>" alt="">
                    </div>
                  </div>

                <?php endif; ?>
              </div>
            </div>
        <?php endwhile;
        endif;
        ?>
      </div>

      <div class="col-12 accordion__wrapper__mobile">
        <div class="accordion__title">
          <div class="wrap">
            <div class="title d4_title">
              <?= $title ?>
            </div>
            <h3>
              <?= get_sub_field('title'); ?>
            </h3>
            <p>
              <?= get_sub_field('text'); ?>
            </p>

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
        <?php
        $index = 0;
        if (have_rows('accordion')) :
          while (have_rows('accordion')) : the_row();
            $index = $index + 1 ?>

            <div class="accordion__tile">
              <button class="accordion" id="accordion-mobile-<?php echo $index; ?>"><?= get_sub_field('acc_text'); ?></button>
              <div class="panel">
                <div class="wrap">
                  <h3>
                    <?= get_sub_field('title'); ?>
                  </h3>
                  <p>
                    <?= get_sub_field('text'); ?>
                  </p>

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
                  <?php if (get_sub_field('image')): ?>
                    <div class="img__grandparent">
                      <div class="img__wrap">
                        <img src="<?= get_sub_field('image')['url']; ?>" alt="">
                      </div>
                    </div>
                  <?php endif; ?>
                </div>

              </div>
            </div>

        <?php endwhile;
        endif;
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
<?php $post_objects = get_sub_field('posts'); ?>
<?php if ($post_objects): ?>
  <?php foreach ($post_objects as $post_object) : ?>
  <?php endforeach; ?>
<?php endif; ?>

<?php if (get_sub_field('true_false')): ?>
  <?php // do something 
  ?>
<?php endif; ?>