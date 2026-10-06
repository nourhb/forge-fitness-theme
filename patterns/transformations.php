<?php
/**
 * Title: Forge Transformations
 * Slug: forge/transformations
 * Categories: forge
 * Description: Member transformation stories with photos.
 */

$stories = array(
	array( 'name' => 'James K.', 'result' => 'Lost 28 kg in 10 months', 'quote' => 'I walked in barely able to do ten push-ups. The coaches built me a plan, the community kept me honest, and ten months later I deadlift my old bodyweight.', 'img' => 'https://images.unsplash.com/photo-1549060279-7e168fcee0c2?w=800&q=80&auto=format&fit=crop' ),
	array( 'name' => 'Priya S.', 'result' => 'First pull-up to first competition', 'quote' => 'From zero pull-ups to competing in my first powerlifting meet in eighteen months. The programming here is on another level.', 'img' => 'https://images.unsplash.com/photo-1550345332-09e3ac987658?w=800&q=80&auto=format&fit=crop' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"className":"forge-reveal","style":{"typography":{"textTransform":"uppercase","letterSpacing":".25em"}},"textColor":"forge","fontSize":"small"} -->
	<p class="forge-reveal has-forge-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:.25em">Proof, not promises</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"className":"forge-display forge-reveal","fontSize":"x-large"} -->
	<h2 class="wp-block-heading forge-display forge-reveal has-x-large-font-size">Transformations</h2>
	<!-- /wp:heading -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<?php foreach ( $stories as $s ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"forge-card forge-reveal","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"coal"} -->
			<div class="wp-block-group forge-card forge-reveal has-coal-background-color has-background" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
				<!-- wp:image {"aspectRatio":"16/10","scale":"cover","style":{"border":{"radius":"4px"}}} -->
				<figure class="wp-block-image" style="border-radius:4px"><img src="<?php echo esc_url( $s['img'] ); ?>" alt="<?php echo esc_attr( $s['name'] ); ?> training" style="aspect-ratio:16/10;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"textColor":"forge","fontSize":"medium","style":{"typography":{"textTransform":"uppercase","letterSpacing":".08em"}}} -->
				<p class="has-forge-color has-text-color has-medium-font-size" style="text-transform:uppercase;letter-spacing:.08em"><?php echo esc_html( $s['result'] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:quote -->
				<blockquote class="wp-block-quote"><!-- wp:paragraph --><p><?php echo esc_html( $s['quote'] ); ?></p><!-- /wp:paragraph --><cite>— <?php echo esc_html( $s['name'] ); ?>, member since 2023</cite></blockquote>
				<!-- /wp:quote -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
