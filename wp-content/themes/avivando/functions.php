<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require 'inc/woocommerce/class-storefront-woocommerce.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */

function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
background-image: url(http://www.bulkdesign.com.br/cbdmed/wp-content/themes/storefront/images/logo.png);
width: 100%;
background-size: 100%;
}
.login h1 a {
	background-position: bottom !important;
}
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

function remove_core_updates(){
global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,); }
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');

// CONTACT FORM SUBMIT
add_action( 'wp_footer', 'contact_form_submit' );
 
function contact_form_submit() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '687' == event.detail.contactFormId ) {
        alert('O seu cupom de desconto é ANIA2017');
    }
}, false );
</script>
<?php
}

/**
* Auto reduce WooCommerce order stock at checkout.
* Add to theme functions.php file
*/
 
add_action( 'woocommerce_thankyou', 'woocommerce_reduce_order_stock' );
function woocommerce_reduce_order_stock( $order_id ) {
    global $woocommerce;
 
    if ( !$order_id )
        return;
    $order = new WC_Order( $order_id );
    $order->reduce_order_stock();
}

add_filter( 'woocommerce_payment_complete_reduce_order_stock', '__return_false' ); /** reduce stock just once */

/**
 * @snippet       Remove Sidebar @ Single Product Page for Storefront Theme
*/
 
add_action( 'get_header', 'bbloomer_remove_storefront_sidebar' );
 
function bbloomer_remove_storefront_sidebar() {
    if ( is_product() ) {
        remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
    }
}

add_action('woocommerce_checkout_process', 'validacao_cnpj');

/**
* FUNCAO PARA OBTER O PRECO
*/
function obtendo_o_preco() {
    global $product;

    if( $product->is_on_sale() ) {
        return $product->get_sale_price();
    }

    return $product->get_regular_price();
}

/**
* FUNCAO PARA PERMITIR COMPRA DE 1 PRODUTO APENAS
**/

add_filter( 'woocommerce_add_to_cart_validation', 'bbloomer_only_one_in_cart', 99, 2 );
  
function bbloomer_only_one_in_cart( $passed, $added_product_id ) {
 
global $woocommerce;
 
// empty cart: new item will replace previous
$woocommerce->cart->empty_cart();
 
// display a message if you like
wc_add_notice( 'Produto adicionado ao carrinho!', 'notice' );
 
return $passed;
}

add_filter( 'woocommerce_checkout_get_value' , 'clear_checkout_fields' );

function clear_checkout_fields($input) {
	return '';
}

?>