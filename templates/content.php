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
		<div class="image-and-buttons">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 342.183 13.352" xml:space="preserve"><g id="E1b" fill="none" stroke="#939598" stroke-width="2.438" stroke-linecap="round" stroke-miterlimit="5"><path d="M48.952 11.148L34.94 2.222v8.926L20.72 2.222v8.926H1.22M340.964 11.148H48.952"/></g></svg>
			<img src="http://localhost:3000/the-brm/wp-content/uploads/2015/09/IMG_0167.jpg">
		</div>
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
