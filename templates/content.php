<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>

  <div class="brm-gallery">
  	asdfsdf
  </div>

  <div class="brm-gallery production">

  	<?php 
  	if ( get_post_gallery() ) :
  		$gallery = get_post_gallery( get_the_ID(), false );

  	// $gallery_id_array = str_split( $gallery['ids'] );

  	//   foreach( $gallery_id_array AS $id )
  	//   {
  	// 	$attachment_meta = wp_get_attachment( $id );

  	// 	echo $attachment_meta;
  	//   }

  	/* Loop through all the images and output them one by one */
  	foreach( $gallery['src'] AS $src )
  	{
  	?>

  		<img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" />

  	<?php
  	}
  	endif;
  	?>
  </div>
</article>
