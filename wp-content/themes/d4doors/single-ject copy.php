<?php
the_post();
get_header();
?>

<section class="project__intro__section">
	
</section>

<section class="project__video__section">
	<div class="container">
		<div class="row">
			<div class="col-12 media__wrap">
				<?php $video__link = get_field('video_link'); ?>
				<?php if ($video__link) : ?>
					<a href="<?php echo esc_url(get_field('video_link')); ?>" data-lity="">
						<img class="video__play" src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/play.svg" alt="">
						<div class="img">
							<img class="bg" src="<?= get_field('video_image')['url']; ?>" alt="">
						</div>
					</a>

				<?php endif; ?>
			</div>
		</div>
	</div>
</section>


<section class="project__image__section">
	<div class="container">
		<div class="row__images">
			<div class="imgx1">
				<div class="img__wrap">
					<img src="<?= get_field('image1')['url']; ?>" alt="">
				</div>
			</div>
			<div class="imgx1">
				<div class="img__wrap">
					<img src="<?= get_field('image2')['url']; ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="project__bottom__slider__section">
	<div class="container">
		<?php if (have_rows('bottom_slider')) : ?>
			<div class="slider-class first-slide">
				<?php while (have_rows('bottom_slider')) : the_row(); ?>
					<div class="item">
						<div class="img__wrap">
							<img src="<?= get_sub_field('image')['url']; ?>" alt="">
							<div class="mask"></div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>