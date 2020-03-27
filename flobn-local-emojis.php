<?php
/**
 * Load emojis locally.
 *
 * @package   FlorianBrinkmann\LocalEmojis
 * @license   GPL-3.0+
 *
 * @wordpress-plugin
 * Plugin Name: Local Emojis
 * Description: Plugin that loads emoji fallbacks for older browsers from your webserver instead of the WordPress CDN.
 * Version:     0.1.0
 * Author:      Florian Brinkmann
 * License:     GPLv3 https://www.gnu.org/licenses/gpl-3.0.html
 */

namespace FlorianBrinkmann\LocalEmojis;

add_filter( 'emoji_url', __NAMESPACE__ . '\\filter_emoji_url' );
function filter_emoji_url() {
	return plugins_url( '72x72/', __FILE__ );
}

add_filter( 'emoji_svg_url', __NAMESPACE__ . '\\filter_emoji_svg_url' );
function filter_emoji_svg_url() {
	return plugins_url( 'svg/', __FILE__ );
}
