<?php
/**
 * Override field methods
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       2.2.7
 */

/**
 * Field overrides.
 */
class Kirki_Field_Typography extends Kirki_Field {

	/**
	 * Sets the control type.
	 *
	 * @access protected
	 */
	protected function set_type() {

		$this->type = 'kirki-typography';

	}

	/**
	 * Sets the $sanitize_callback
	 *
	 * @access protected
	 */
	protected function set_sanitize_callback() {

		// If a custom sanitize_callback has been defined,
		// then we don't need to proceed any further.
		if ( ! empty( $this->sanitize_callback ) ) {
			return;
		}
		$this->sanitize_callback = array( $this, 'sanitize' );

	}

	/**
	 * Sets the $js_vars
	 *
	 * @access protected
	 */
	protected function set_js_vars() {

		if ( ! is_array( $this->js_vars ) ) {
			$this->js_vars = array();
		}

		// Check if transport is set to auto.
		// If not, then skip the auto-calculations and exit early.
		if ( 'auto' !== $this->transport ) {
			return;
		}

		// Set transport to refresh initially.
		// Serves as a fallback in case we failt to auto-calculate js_vars.
		$this->transport = 'refresh';

		$js_vars = array();

		// Try to auto-generate js_vars.
		// First we need to check if js_vars are empty, and that output is not empty.
		if ( ! empty( $this->output ) ) {

			// Start going through each item in the $output array.
			foreach ( $this->output as $output ) {
				$output['function'] = 'css';

				// If 'element' or 'property' are not defined, skip this.
				if ( ! isset( $output['element'] ) ) {
					continue;
				}
				if ( is_array( $output['element'] ) ) {
					$output['element'] = implode( ',', $output['element'] );
				}
				if ( false !== strpos( $output['element'], ':' ) ) {
					$output['function'] = 'style';
				}

				// If we got this far, it's safe to add this.
				$js_vars[] = $output;
			}

			// Did we manage to get all the items from 'output'?
			// If not, then we're missing something so don't add this.
			if ( count( $js_vars ) !== count( $this->output ) ) {
				return;
			}
			$this->js_vars   = $js_vars;
			$this->transport = 'postMessage';

		}

	}

	/**
	 * Sanitizes typography controls
	 *
	 * @since 2.2.0
	 * @param array $value The value.
	 * @return array
	 */
	public function sanitize( $value ) {

		if ( ! is_array( $value ) ) {
			return array();
		}

		// Escape the font-family.
		if ( isset( $value['font-family'] ) ) {
			$value['font-family'] = esc_attr( $value['font-family'] );
		}

		// Make sure we're using a valid variant.
		// We're adding checks for font-weight as well for backwards-compatibility
		// Versions 2.0 - 2.2 were using an integer font-weight.
		if ( isset( $value['variant'] ) || isset( $value['font-weight'] ) ) {
			if ( isset( $value['font-weight'] ) && ! empty( $value['font-weight'] ) ) {
				if ( ! isset( $value['variant'] ) || empty( $value['variant'] ) ) {
					$value['variant'] = $value['font-weight'];
				}
				unset( $value['font-weight'] );
			}
			$valid_variants = Kirki_Fonts::get_all_variants();
			if ( ! array_key_exists( $value['variant'], $valid_variants ) ) {
				$value['variant'] = 'regular';
			}
		}

		// Make sure the saved value is "subsets" (plural) and not "subset".
		// This is for compatibility with older versions.
		if ( isset( $value['subset'] ) ) {
			if ( ! empty( $value['subset'] ) && ! isset( $value['subsets'] ) || empty( $value['subset'] ) ) {
				$value['subsets'] = $value['subset'];
			}
			unset( $value['subset'] );
		}

		// Make sure we're using a valid subset.
		if ( isset( $value['subsets'] ) ) {
			$valid_subsets = Kirki_Fonts::get_google_font_subsets();
			$subsets_ok = array();
			if ( is_array( $value['subsets'] ) ) {
				foreach ( $value['subsets'] as $subset ) {
					if ( array_key_exists( $subset, $valid_subsets ) ) {
						$subsets_ok[] = $subset;
					}
				}
				$value['subsets'] = $subsets_ok;
			}
		}

		foreach ( $value as $key => $subvalue ) {

			if ( in_array( $key, array( 'font-size', 'letter-spacing', 'word-spacing', 'line-height' ), true ) ) {
				$value[ $key ] = Kirki_Sanitize_Values::css_dimension( $value[ $key ] );
			} elseif ( 'text-align' === $key && ! in_array( $value['text-align'], array( 'inherit', 'left', 'center', 'right', 'justify' ), true ) ) {
				$value['text-align'] = 'inherit';
			} elseif ( 'text-transform' === $key && ! in_array( $value['text-transform'], array( 'none', 'capitalize', 'uppercase', 'lowercase', 'initial', 'inherit' ), true ) ) {
				$value['text-transform'] = 'none';
			} elseif ( 'color' === $key ) {
				$value['color'] = ariColor::newColor( $value['color'] )->toCSS( 'hex' );
			}
		}
		return $value;
	}

	/**
	 * Sets the $choices
	 *
	 * @access protected
	 * @since 3.0.0
	 */
	protected function set_choices() {

		if ( ! is_array( $this->choices ) ) {
			$this->choices = array();
		}
		if ( ! isset( $this->choices['fonts'] ) ) {
			$this->choices['fonts'] = array();
		}
		if ( ! isset( $this->choices['fonts']['standard'] ) ) {
			$this->choices['fonts']['standard'] = array();
		}
		if ( ! isset( $this->choices['fonts']['google'] ) ) {
			$this->choices['fonts']['google'] = array();
		}
		if ( ! isset( $this->choices['variant'] ) ) {
			$this->choices['variant'] = array();
		}
	}
}
