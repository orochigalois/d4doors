<!-- Generate by Flexible Module Helper -->
<?php $random__id = lp_generateRandomString(); ?>
<section class="slider_section" id="<?= $random__id; ?>">
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

<?php 
if( have_rows('repeater') ): 
while ( have_rows('repeater') ) : the_row(); ?>    
xxxxxxxxxx 
<?php endwhile;    
endif;    
?> 

<?= get_sub_field('image')['url']; ?>  
