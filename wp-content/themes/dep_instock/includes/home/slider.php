<?php
/*
	Campos slider
	- slider_home (field_repeater)
  - titulo_slider

*/
	$titulo_slider = get_field('titulo_slider');

	?>



<section id="slider-home">
  <div class="slider-wrapper slider">
    <?php
  while (have_rows('slider_home')): the_row();

    $imagen = get_sub_field('imagen');

 ?>

<div class="slider--item" style="background-image:url(<?php echo $slider_item; ?>)">

    <div class="slider--caption">
      <?php if($big_text): ?>
      <h1><?php echo $big_text; ?></h1>
    <?php endif; ?>
    <?php if($small_text): ?>
      <h2><?php echo $small_text; ?></h2>
    <?php endif; ?>
    <?php if($color_text): ?>
      <h2> <span><?php echo $color_text; ?></span> </h2>
    <?php endif; ?>
    </div>



</div>
	<?php endwhile; ?>
  <div class="info-slider">
    <?php echo $titulo_slider; ?>
  </div>
  </div>    
</section>
