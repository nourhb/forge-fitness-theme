<?php
/**
 * Title: Forge Training Gallery
 * Slug: forge/gallery-training
 * Categories: forge
 * Description: Four-photo training gallery with hover energy.
 */

$photos = array(
	array( 'img' => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=800&q=80&auto=format&fit=crop', 'alt' => 'Athlete doing battle ropes' ),
	array( 'img' => 'https://images.unsplash.com/photo-1599901860904-17e6ed7083a0?w=800&q=80&auto=format&fit=crop', 'alt' => 'Kettlebell training' ),
	array( 'img' => 'https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?w=800&q=80&auto=format&fit=crop', 'alt' => 'Boxing pad work' ),
	array( 'img' => 'https://images.unsplash.com/photo-1526506118085-60ce8714f8c5?w=800&q=80&auto=format&fit=crop', 'alt' => 'Barbell lift' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"coal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-coal-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"className":"forge-reveal","style":{"typography":{"textTransform":"uppercase","letterSpacing":".25em"}},"textColor":"forge","fontSize":"small"} -->
	<p class="forge-reveal has-forge-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:.25em">Inside the forge</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"className":"forge-display forge-reveal","fontSize":"x-large"} -->
	<h2 class="wp-block-heading forge-display forge-reveal has-x-large-font-size">Training gallery</h2>
	<!-- /wp:heading -->
	<!-- wp:gallery {"columns":4,"linkTo":"none"} -->
	<figure class="wp-block-gallery has-nested-images columns-4 is-cropped">
		<?php foreach ( $photos as $p ) : ?>
		<!-- wp:image {"scale":"cover"} -->
		<figure class="wp-block-image"><img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['alt'] ); ?>" style="object-fit:cover"/></figure>
		<!-- /wp:image -->
		<?php endforeach; ?>
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
