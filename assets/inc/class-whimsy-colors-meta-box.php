<?php

if ( ! defined( 'ABSPATH' ) ) exit;

	/**
	 * Load frontend CSS.
	 * @access  public
	 * @since   1.0.0
	 * @return void
	 */
class Whimsy_Colors_Meta_Box {
	private $screens = array(
		'whimsy_colors',
	);
	private $fields = array(
		array(
			'id' => 'color-1',
			'label' => 'Color #1',
			'type' => 'color',
		),
		array(
			'id' => 'color-2',
			'label' => 'Color #2',
			'type' => 'color',
		),
		array(
			'id' => 'color-3',
			'label' => 'Color #3',
			'type' => 'color',
		),
		array(
			'id' => 'color-4',
			'label' => 'Color #4',
			'type' => 'color',
		),
		array(
			'id' => 'color-5',
			'label' => 'Color #5',
			'type' => 'color',
		),
	);

	/**
	 * Class construct method. Adds actions to their respective WordPress hooks.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_post' ) );
	}

	/**
	 * Hooks into WordPress' add_meta_boxes function.
	 * Goes through screens (post types) and adds the meta box.
	 */
	public function add_meta_boxes() {
		foreach ( $this->screens as $screen ) {
			add_meta_box(
				'whimsy_colors',
				__( 'Whimsy Colors', 'whimsy-colors' ),
				array( $this, 'add_meta_box_callback' ),
				$screen,
				'advanced',
				'high'
			);
		}
	}

	/**
	 * Generates the HTML for the meta box
	 * 
	 * @param object $post WordPress post object
	 */
	public function add_meta_box_callback( $post ) {
		wp_nonce_field( 'whimsy_colors_data', 'whimsy_colors_nonce' );
		$this->generate_fields( $post );
	}

	/**
	 * Generates the field's HTML for the meta box.
	 */
	public function generate_fields( $post ) {
		$output = '';
		foreach ( $this->fields as $field ) {
			$label = '<label for="' . $field['id'] . '">' . $field['label'] . '</label>';
			$db_value = get_post_meta( $post->ID, 'whimsy_colors_' . $field['id'], true );
			switch ( $field['type'] ) {
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$field['type'] !== 'color' ? 'class="regular-text"' : '',
						$field['id'],
						$field['id'],
						$field['type'],
						$db_value
					);
			}
			$output .= $this->row_format( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}

	/**
	 * Generates the HTML for table rows.
	 */
	public function row_format( $label, $input ) {
		return sprintf(
			'<tr><th scope="row">%s</th><td>%s</td></tr>',
			$label,
			$input
		);
	}
	/**
	 * Hooks into WordPress' save_post function
	 */
	public function save_post( $post_id ) {
		if ( ! isset( $_POST['whimsy_colors_nonce'] ) )
			return $post_id;

		$nonce = $_POST['whimsy_colors_nonce'];
		if ( !wp_verify_nonce( $nonce, 'whimsy_colors_data' ) )
			return $post_id;

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		foreach ( $this->fields as $field ) {
			if ( isset( $_POST[ $field['id'] ] ) ) {
				switch ( $field['type'] ) {
					case 'email':
						$_POST[ $field['id'] ] = sanitize_email( $_POST[ $field['id'] ] );
						break;
					case 'text':
						$_POST[ $field['id'] ] = sanitize_text_field( $_POST[ $field['id'] ] );
						break;
				}
				update_post_meta( $post_id, 'whimsy_colors_' . $field['id'], $_POST[ $field['id'] ] );
			} else if ( $field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, 'whimsy_colors_' . $field['id'], '0' );
			}
		}
	}
}
new Whimsy_Colors_Meta_Box;