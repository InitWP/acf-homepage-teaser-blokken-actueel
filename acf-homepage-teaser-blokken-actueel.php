/************************************* Actueel Blokken *************************************/
if( have_rows('homepage_teaser_blocks') ): ?>
	<div class="grid-3">

	<?php while( have_rows('homepage_teaser_blocks') ): the_row();

		// Get the page
		$post_object = get_sub_field('teaser_block');

		if ($post_object) {
			$post = $post_object;
			setup_postdata($post);

			$post_id = $post->ID;
			$post_type_object = get_post_type_object(get_post_type($post));
		?>
			<div class="teaser teaserSmall">
				<a href="<?php the_permalink(); ?>" class="teaserSmall--inner">
					<div class="teaserSmall--category"><?php echo $post_type_object->labels->menu_name; ?></div>
					<h2 class="teaserSmall--title"><?php the_title(); ?></h2>
					<div class="teaserSmall--content">
						<?php echo kimo_get_the_excerpt(130); ?>
					</div>
					<span class="readMore teaserSmall--readMore"><?php echo kimo_read_more_string(); ?></span>
				</a>
			</div>
			<?php
			wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
		}

	endwhile; ?>

	</div>
<?php
endif;
/************************************* /Actueel Blokken *************************************/
