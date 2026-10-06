<?php
/**
 * Title: Forge Free Week CTA
 * Slug: forge/trial-cta
 * Categories: forge
 * Description: Full-width banner offering a free first week.
 */

$img = 'https://images.unsplash.com/photo-1605296867304-46d5465a13f1?w=1600&q=80&auto=format&fit=crop';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img ); ?>","dimRatio":80,"overlayColor":"ink","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Athlete performing a heavy deadlift" src="<?php echo esc_url( $img ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","className":"forge-display forge-reveal","fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-text-align-center forge-display forge-reveal has-x-large-font-size">Your first week is <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-forge-color">free</mark></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","className":"forge-reveal","textColor":"bone","fontSize":"large"} -->
			<p class="has-text-align-center forge-reveal has-bone-color has-text-color has-large-font-size">Full gym access, unlimited classes, one PT intro session. No card required.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"className":"forge-reveal","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons forge-reveal" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"fontSize":"medium"} -->
				<div class="wp-block-button has-medium-font-size"><a class="wp-block-button__link wp-element-button" href="/membership/">Claim my free week</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
