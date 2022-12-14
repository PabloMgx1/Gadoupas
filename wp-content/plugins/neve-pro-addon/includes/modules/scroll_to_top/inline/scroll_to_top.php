<?php
/**
 * Author:          Stefan Cotitosu <stefan@themeisle.com>
 * Created on:      2019-02-11
 *
 * @package Neve Pro Addon
 */

namespace Neve_Pro\Modules\Scroll_To_Top\Inline;

use Neve\Views\Inline\Base_Inline;

/**
 * Class Scroll_To_Top
 *
 * @package Neve_Pro\Modules\Scroll_To_Top\Inline
 */
class Scroll_To_Top extends Base_Inline {

	/**
	 * Call inline handlers.
	 *
	 * @return void
	 */
	public function init() {
		$this->colors();
		$this->icon_size();
		$this->border_radius();
	}

	/**
	 * Color.
	 */
	private function colors() {

		$color            = get_theme_mod( 'neve_scroll_to_top_icon_color', '#ffffff' );
		$hover_color      = get_theme_mod( 'neve_scroll_to_top_icon_hover_color', '#ffffff' );
		$background       = get_theme_mod( 'neve_scroll_to_top_background_color', '#0366d6' );
		$hover_background = get_theme_mod( 'neve_scroll_to_top_background_hover_color', '#0366d6' );

		$this->add_style(
			array(
				array(
					'css_prop' => 'color',
					'value'    => $color,
				),
				array(
					'css_prop' => 'background',
					'value'    => $background,
				),
			),
			'div.scroll-to-top'
		);

		$this->add_style(
			array(
				array(
					'css_prop' => 'color',
					'value'    => $hover_color,
				),
				array(
					'css_prop' => 'background',
					'value'    => $hover_background,
				),
			),
			'div.scroll-to-top:hover'
		);
	}

	/**
	 * Border-radius.
	 */
	private function border_radius() {

		$border_radius = get_theme_mod( 'neve_scroll_to_top_border_radius', '3' );

		$this->add_style(
			array(
				array(
					'css_prop' => 'border-radius',
					'value'    => $border_radius,
					'suffix'   => 'px',
				),
			),
			'div.scroll-to-top'
		);
	}

	/**
	 * Icon size.
	 */
	private function icon_size() {

		$icon_size = get_theme_mod( 'neve_scroll_to_top_icon_size' );
		$icon_size = json_decode( $icon_size, true );

		$settings = array(
			array(
				'css_prop' => 'width',
				'value'    => $icon_size,
				'suffix'   => 'px',
			),
			array(
				'css_prop' => 'height',
				'value'    => $icon_size,
				'suffix'   => 'px',
			),
		);

		$this->add_responsive_style( $settings, '.scroll-to-top-icon' );
	}

}
