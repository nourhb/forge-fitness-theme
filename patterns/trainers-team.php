<?php
/**
 * Title: Forge Trainers
 * Slug: forge/trainers-team
 * Categories: forge
 * Description: Four trainer profiles with specialties.
 */

$trainers = array(
	array( 'name' => 'Marcus Reed', 'role' => 'Head Strength Coach', 'specialty' => 'Powerlifting · 12 yrs coaching', 'img' => 'https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?w=800&q=80&auto=format&fit=crop' ),
	array( 'name' => 'Dana Cole', 'role' => 'HIIT & Conditioning', 'specialty' => 'CrossFit L2 · 8 yrs coaching', 'img' => 'https://images.unsplash.com/photo-1574680096145-d05b474e2155?w=800&q=80&auto=format&fit=crop' ),
	array( 'name' => 'Sofia Marchetti', 'role' => 'Mobility & Yoga', 'specialty' => 'RYT-500 · Rehab specialist', 'img' => 'https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?w=800&q=80&auto=format&fit=crop' ),
	array( 'name' => 'Leo Fontaine', 'role' => 'Boxing Coach', 'specialty' => 'Ex-pro · 40+ amateur bouts', 'img' => 'https://images.unsplash.com/photo-1584735935682-2f2b69dff9d2?w=800&q=80&auto=format&fit=crop' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"className":"forge-reveal","style":{"typography":{"textTransform":"uppercase","letterSpacing":".25em"}},"textColor":"forge","fontSize":"small"} -->
	<p class="forge-reveal has-forge-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:.25em">Coaches who coach</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"className":"forge-display forge-reveal","fontSize":"x-large"} -->
	<h2 class="wp-block-heading forge-display forge-reveal has-x-large-font-size">Meet your trainers</h2>
	<!-- /wp:heading -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<?php foreach ( $trainers as $t ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"forge-card forge-reveal","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"coal"} -->
			<div class="wp-block-group forge-card forge-reveal has-coal-background-color has-background" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
				<!-- wp:image {"aspectRatio":"1","scale":"cover","style":{"border":{"radius":"4px"}}} -->
				<figure class="wp-block-image" style="border-radius:4px"><img src="<?php echo esc_url( $t['img'] ); ?>" alt="<?php echo esc_attr( $t['name'] ); ?>" style="aspect-ratio:1;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"fontFamily":"display","fontSize":"large"} -->
				<h3 class="wp-block-heading has-display-font-family has-large-font-size"><?php echo esc_html( $t['name'] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"forge","fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":".1em"}}} -->
				<p class="has-forge-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:.1em"><?php echo esc_html( $t['role'] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"smoke","fontSize":"small"} -->
				<p class="has-smoke-color has-text-color has-small-font-size"><?php echo esc_html( $t['specialty'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
