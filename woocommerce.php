<?php
/**
 * WooCommerce template for Tom Watson Audio Child.
 *
 * Uses the normal page structure so shop/cart/checkout/account pages
 * render in the same main content area as standard site pages.
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<div id="primary" class="content-area content-area--woocommerce">
	<main id="main" class="site-main" role="main">
		<?php woocommerce_content(); ?>
	</main>
</div>

<?php
get_sidebar();
get_footer();
