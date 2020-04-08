<?php

/*
Plugin Name: Pressbooks Shortcode Handler
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Plugin for Pressbooks to handle additional shortcodes used by Lumen Learning.
Version: 1.0
Author: Steel Wagstaff
Author URI: https://steelwagstaff.info
License: GPL2
*/

add_shortcode( 'reveal-answer', 'revealAnswerShortCodeHandler' );
add_shortcode( 'hidden-answer', 'hiddenAnswerShortCodeHandler' );

/**
 * Shortcode handler for [reveal-answer].
 * Ex: [reveal-answer]Show Answer[/reveal-answer].
 * @param string $content Shortcode content.
 *
 * @return string
 */
function revealAnswerShortCodeHandler( $atts, $content = null ) {
    return '<details><summary>' . do_shortcode( $content ) . '</summary>';
}

/**
 * Shortcode handler for [hidden-answer]
 * Ex: [hidden-answer]Show Answer[/hidden-answer].
 *
 * @param string $content Shortcode content.
 *
 * @return string
 */

function hiddenAnswerShortCodeHandler( $atts, $content = null ) {
    return do_shortcode( $content ) . '</details>';
}
