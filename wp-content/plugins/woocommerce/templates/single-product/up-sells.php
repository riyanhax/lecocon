<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $upsells ) : ?>

	<section class="up-sells upsells products row">

		<div class="col-sm-12 text-center container-related">
			<div class="text-bg">
                Exceptions
            </div>
			<h2 class="title-site"><?php echo __( 'À ne pas manquer', 'cocon' ); ?></h2>
		</div>

		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $upsells as $upsell ) : ?>

				<?php
				 	$post_object = get_post( $upsell->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); ?>

					<?php echo clrz_get_template_part('', 'product-related'); ?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</section>

<?php endif;

wp_reset_postdata();
