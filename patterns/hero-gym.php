<?php
/**
 * Title: Forge Hero
 * Slug: forge/hero-gym
 * Categories: forge
 * Description: Full-width hero with headline, training photo and join CTA.
 */

$img = 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=1600&q=80&auto=format&fit=crop';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $img ); ?>","dimRatio":75,"overlayColor":"ink","minHeight":85,"minHeightUnit":"vh","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:85vh"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-75 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Athletes training in a dark modern gym" src="<?php echo esc_url( $img ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"forge-reveal","style":{"typography":{"textTransform":"uppercase","letterSpacing":".25em"}},"textColor":"forge","fontSize":"small"} -->
			<p class="forge-reveal has-forge-color has-text-color has-small-font-size" style="text-transform:uppercase;letter-spacing:.25em">Strength · Conditioning · Community</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"forge-display forge-reveal","fontSize":"display"} -->
			<h1 class="wp-block-heading forge-display forge-reveal has-display-font-size">Forge your<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-forge-color">strongest</mark> self</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"forge-reveal","textColor":"bone","fontSize":"large"} -->
			<p class="forge-reveal has-bone-color has-text-color has-large-font-size">2,400 m² of iron, 60+ classes a week and coaches who actually coach. Your first week is on us.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"className":"forge-reveal","layout":{"type":"flex"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons forge-reveal" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/membership/">Start free week</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-forge-outline"} -->
				<div class="wp-block-button is-style-forge-outline"><a class="wp-block-button__link wp-element-button" href="/classes/">View classes</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
