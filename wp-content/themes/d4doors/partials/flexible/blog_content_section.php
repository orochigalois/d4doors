<!-- Generate by Flexible Module Helper -->
<?php $random__id = lp_generateRandomString(); ?>
<section class="blog_content_section" id="<?= $random__id; ?>">
  <div class="container container-fluid">
    <div class="row">
      <div class="col-lg-6">
      </div>
      <div class="col-lg-6">
      </div>
    </div>
  </div>
</section>
<?php if (get_sub_field('padding_top')) : ?>
<style>
#<?= $random__id; ?>{
padding-top: <?= get_sub_field('padding_top'); ?>px !important;
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom')) : ?>
<style>
#<?= $random__id; ?>{
padding-bottom: <?= get_sub_field('padding_bottom'); ?>px !important;
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_576')) : ?>
<style>
@media only screen and (min-width: 576px) {
#<?= $random__id; ?>{
padding-top: <?= get_sub_field('padding_top_576'); ?>px !important;
}
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_576')) : ?>
<style>
@media only screen and (min-width: 576px) {
#<?= $random__id; ?>{
padding-bottom: <?= get_sub_field('padding_bottom_576'); ?>px !important;
}
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_768')) : ?>
<style>
@media only screen and (min-width: 768px) {
#<?= $random__id; ?>{
padding-top: <?= get_sub_field('padding_top_768'); ?>px !important;
}
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_768')) : ?>
<style>
@media only screen and (min-width: 768px) {
#<?= $random__id; ?>{
padding-bottom: <?= get_sub_field('padding_bottom_768'); ?>px !important;
}
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_1024')) : ?>
<style>
@media only screen and (min-width: 1024px) {
#<?= $random__id; ?>{
padding-top: <?= get_sub_field('padding_top_1024'); ?>px !important;
}
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_1024')) : ?>
<style>
@media only screen and (min-width: 1024px) {
#<?= $random__id; ?>{
padding-bottom: <?= get_sub_field('padding_bottom_1024'); ?>px !important;
}
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_1280')) : ?>
<style>
@media only screen and (min-width: 1280px) {
#<?= $random__id; ?>{
padding-top: <?= get_sub_field('padding_top_1280'); ?>px !important;
}
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_1280')) : ?>
<style>
@media only screen and (min-width: 1280px) {
#<?= $random__id; ?>{
padding-bottom: <?= get_sub_field('padding_bottom_1280'); ?>px !important;
}
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_1440')) : ?>
<style>
@media only screen and (min-width: 1440px) {
#<?= $random__id; ?>{
padding-top: <?= get_sub_field('padding_top_1440'); ?>px !important;
}
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_1440')) : ?>
<style>
@media only screen and (min-width: 1440px) {
#<?= $random__id; ?>{
padding-bottom: <?= get_sub_field('padding_bottom_1440'); ?>px !important;
}
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_top_1920')) : ?>
<style>
@media only screen and (min-width: 1920px) {
#<?= $random__id; ?>{
padding-top: <?= get_sub_field('padding_top_1920'); ?>px !important;
}
}
</style>
<?php endif; ?>
<?php if (get_sub_field('padding_bottom_1920')) : ?>
<style>
@media only screen and (min-width: 1920px) {
#<?= $random__id; ?>{
padding-bottom: <?= get_sub_field('padding_bottom_1920'); ?>px !important;
}
}
</style>
<?php endif; ?>

<?= get_sub_field('title'); ?> 

<?= get_sub_field('h2_text'); ?> 

<?= get_sub_field('highlight'); ?> 

<?= get_sub_field('wysiwyg'); ?>    

<?php 
if( have_rows('related_links') ): 
while ( have_rows('related_links') ) : the_row(); ?>    
xxxxxxxxxx 
<?php endwhile;    
endif;    
?> 

<?php 
$link = get_sub_field('link');   
if( $link ): 
$link_url = $link['url'];    
$link_title = $link['title'];    
$link_target = $link['target'] ? $link['target'] : '_self';    
?> 
<a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>    
<?php endif; ?>   

<?php 
if( have_rows('customised_options') ): 
while ( have_rows('customised_options') ) : the_row(); ?>    
xxxxxxxxxx 
<?php endwhile;    
endif;    
?> 
