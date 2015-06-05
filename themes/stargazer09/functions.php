<?php
/**
 * (To women begging the king to spare their lives) "Ha-ha these humans are
 * definitely foolish creatures.  Think as hard as those weak brains of
 * yours can manage. Do you humans ever listen to the cries of mercy coming
 * from pigs and cows you slaughter?" ~ Meruem | Hunter x Hunter
 *
 * @package    Stargazer09
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2015, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'after_setup_theme', 'stargazer09_setup' );
add_action( 'after_setup_theme', 'stargazer09_wc_setup' );

/**
 * The Theme Setup
 */
function stargazer09_setup()
{
    /*
     * declare WooCommerce support
     */

    add_theme_support( 'woocommerce' );
}

/**
 * The WC Setup
 */
function stargazer09_wc_setup()
{
    /*
     * declare WooCommerce support
     */

    add_theme_support( 'woocommerce' );

    /*
     * no wc pagination
     */

    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
}

/**
 * Enqueue Styles
 */
function stargazer09_enqueue_styles()
{
    wp_dequeue_style( 'style' );
    wp_enqueue_style( 'style' );
}
