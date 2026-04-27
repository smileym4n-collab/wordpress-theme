<?php
/**
 * WooCommerce classic-template fallback for Tom Watson Audio Child.
 *
 * Block-template files in /templates are the primary Woo layout for this
 * block theme. This file is kept for compatibility/fallback scenarios.
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
