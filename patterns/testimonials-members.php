<?php
/**
 * Title: Forge Member Testimonials
 * Slug: forge/testimonials-members
 * Categories: forge
 * Description: Three member review cards with star ratings.
 */

$reviews = array(
	array( 'name' => 'Alex M.', 'plan' => 'All Access · 2 years', 'text' => 'Switched from three other gyms. The coaching here is the difference — someone actually corrects my form instead of scrolling their phone.', 'img' => 'https://images.unsplash.com/photo-1599058917212-d750089bc07e?w=200&q=80&auto=format&fit=crop' ),
	array( 'name' => 'Jordan T.', 'plan' => 'Elite · 1 year', 'text' => 'The 6 AM crew is my second family. Down 15 kg, stronger than I have ever been, and I genuinely look forward to training.', 'img' => 'https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?w=200&q=80&auto=format&fit=crop' ),
	array( 'name' => 'Sam R.', 'plan' => 'Off-Peak · 6 months', 'text' => 'Clean equipment, zero ego, classes that start on time. Best value membership I have had in this city, not even close.', 'img' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=200&q=80&auto=format&fit=crop' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"className":"forge-reveal","style":{"typography":{"textTransform":"uppercase","letterSpacing":".25em"}},"textColor":"forge","fontSize":"small"} -->
	<p class="forge-reveal has-forge-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:.25em">Member reviews</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"className":"forge-display forge-reveal","fontSize":"x-large"} -->
	<h2 class="wp-block-heading forge-display forge-reveal has-x-large-font-size">What members say</h2>
	<!-- /wp:heading -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<?php foreach ( $reviews as $r ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"forge-card forge-reveal","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"coal"} -->
			<div class="wp-block-group forge-card forge-reveal has-coal-background-color has-background" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
				<!-- wp:paragraph {"textColor":"forge","fontSize":"medium"} -->
				<p class="has-forge-color has-text-color has-medium-font-size">★★★★★</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"bone"} -->
				<p class="has-bone-color has-text-color">"<?php echo esc_html( $r['text'] ); ?>"</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":48,"height":48,"scale":"cover","style":{"border":{"radius":"50%"}}} -->
					<figure class="wp-block-image" style="border-radius:50%"><img src="<?php echo esc_url( $r['img'] ); ?>" alt="<?php echo esc_attr( $r['name'] ); ?>" width="48" height="48" style="border-radius:50%;object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html( $r['name'] ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"textColor":"smoke","fontSize":"tiny"} -->
						<p class="has-smoke-color has-text-color has-tiny-font-size"><?php echo esc_html( $r['plan'] ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
