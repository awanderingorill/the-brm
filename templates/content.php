<article <?php post_class('col-sm-8'); ?>>
	<header>
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<div class="brm-gallery">
		<p class="image-description">
			This is placement copy here for this image. Some copywriting will be here and this can go here ilke this and
			maybe a link here and then here. This is placement copy here for this image. Some copywriting will be here and
			this can go here ilke this and maybe a link here and then here.

		</p>
		<img src="http://localhost:3000/the-brm/wp-content/uploads/2015/09/IMG_0167.jpg">
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
	<h2 class="entry-title">Adidas</h2>
	<h2 class="entry-title">Campaigns</h2>
	<h2 class="entry-title">House of Marley</h2>
</article>
