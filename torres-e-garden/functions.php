<?php /* Theme Name: 🌟Torres Digital®

Theme URI: https://www.facebook.com/torresdigital/

    Author: Torres Digital® | Sites → Lojas Virtuais e e-Commerce
    Author URI: https://www.facebook.com/torresdigital/

    Description: Somos uma Agência Gaúcha que trabalha com Desenvolvimento Web voltado para todos os Nichos do Mercado tais como os de insumos, commodities, pequenos, médios e grandes Lojistas que desejam alcançar mais Clientes através do e-Commerce: Sites, Aplicativos, Lojas Virtuais, Marketplaces, WordPress e Woocommerce, integrados com os Principais Cartões e Soluções de Pagamentos do Brasil e do Mundo; tais como Cielo, CyberSource, PagSeguro, Stripe, Vindi, MasterCard, Visa, American Express, outros.

    Torres Digital também conta com toda uma Equipe e um Know-how forte, amplo, e moderno e conceitual para a organização e criação de todo um Portifólio para Publicidade e Propaganda.

    www.torresdigital.tk * Menos é mais.

    Text Domain: torresdigital
    Template: cenote

    Version: 09.12.2020.1607495350
    Updated: 2020-12-09 03:29:10

License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Tags: child theme, woocommerce
Text Domain: torresdigital
This theme, like WordPress, is licensed under the GPL. Use it to make something cool, have fun, and share what you’ve learned with others.  */




/* ********************* All Begin ********************* */



// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION






function torres_digital_add_woocommerce_support() {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'torres_digital_add_woocommerce_support' );



/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">:: index ::</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
        if (is_single()) {
            echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
            the_title();
        }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL https://www.tychesoftwares.com/how-to-customise-woocommerce-breadcrumbs/
 */
add_filter( 'woocommerce_breadcrumb_defaults', 'ts_woocommerce_breadcrumbs_change' );

function ts_woocommerce_breadcrumbs_change() {
    return array(
        'delimiter' => ' &nbsp;&#187;&nbsp;&nbsp; ',
        'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb" style="margin-left:0">',
        'wrap_after' => '</nav>',
        'after' => '',
        'home' => _x( ':: index ::', 'breadcrumb', 'woocommerce' ),
    );
}





