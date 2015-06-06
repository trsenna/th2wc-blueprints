<?php
/**
 * (To women begging the king to spare their lives) "Ha-ha these humans are
 * definitely foolish creatures.  Think as hard as those weak brains of
 * yours can manage. Do you humans ever listen to the cries of mercy coming
 * from pigs and cows you slaughter?" ~ Meruem | Hunter x Hunter
 *
 * @package    Picturesque14
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2015, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

add_action( 'after_setup_theme', 'picturesque14_setup' );

/**
 * The Theme Setup
 */
function picturesque14_setup()
{
    /*
     * declare WooCommerce support
     */

    add_theme_support( 'woocommerce' );

    /*
     * scripts and styles
     */

    add_action( 'wp_enqueue_scripts', 'picturesque14_enqueue_styles' );
}

/**
 * Enqueue Styles
 */
function picturesque14_enqueue_styles()
{
    wp_enqueue_style( 'picturesque14-parent', trailingslashit( get_template_directory_uri() ) . 'style.css' );
}
