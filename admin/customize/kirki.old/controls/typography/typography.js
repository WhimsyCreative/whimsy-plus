wp.customize.controlConstructor['kirki-typography'] = wp.customize.Control.extend({

	ready: function() {

		'use strict';

		var control               = this,
		    textTransformSelector = control.selector + ' .text-transform select',
		    value                 = control.getValue(),
		    picker;

		control.renderFontSelector();
		control.renderVariantSelector();
		control.renderSubsetSelector();

		// Font-size.
		this.container.on( 'change keyup paste', '.font-size input', function() {
			control.saveValue( 'font-size', jQuery( this ).val() );
		});

		// Line-height.
		this.container.on( 'change keyup paste', '.line-height input', function() {
			control.saveValue( 'line-height', jQuery( this ).val() );
		});

		// Letter-spacing.
		this.container.on( 'change keyup paste', '.letter-spacing input', function() {
			control.saveValue( 'letter-spacing', jQuery( this ).val() );
		});

		// Word-spacing.
		this.container.on( 'change keyup paste', '.word-spacing input', function() {
			control.saveValue( 'word-spacing', jQuery( this ).val() );
		});

		this.container.on( 'change', '.text-align input', function() {
			control.saveValue( 'text-align', jQuery( this ).val() );
		});

		// Text-transform
		jQuery( textTransformSelector ).select2().on( 'change', function() {
			control.saveValue( 'text-transform', jQuery( this ).val() );
		});

		picker = this.container.find( '.kirki-color-control' );

		// Change color
		picker.wpColorPicker({
			change: function() {
				setTimeout( function() {
					control.saveValue( 'color', picker.val() );
				}, 100 );
			}
		});
	},

	/**
	 * Adds the font-families to the font-family dropdown
	 * and instantiates select2.
	 */
	renderFontSelector: function() {

		var control         = this,
		    selector        = control.selector + ' .font-family select',
		    data            = [],
		    standardFonts   = [],
		    googleFonts     = [],
			value           = control.getValue(),
			variantSelector = control.selector + ' .variant select',
		    subsetSelector  = control.selector + ' .subsets select',
			fonts           = control.getFonts(),
		    fontSelect;

		// Format standard fonts as an array.
		if ( ! _.isUndefined( fonts.standard ) ) {
			_.each( fonts.standard, function( font ) {
				standardFonts.push({
					id: font.family.replace( /&quot;/g, '&#39' ),
					text: font.label
				});
			});
		}

		// Format google fonts as an array.
		if ( ! _.isUndefined( fonts.standard ) ) {
			_.each( fonts.google, function( font ) {
				googleFonts.push({
					id: font.family,
					text: font.label
				});
			});
		}

		// Combine forces and build the final data.
		data = [
			{ text: 'Standard Fonts', children: standardFonts },
			{ text: 'Google Fonts',   children: googleFonts }
		];

		// Instantiate select2 with the data.
		fontSelect = jQuery( selector ).select2({
			data: data
		});

		// Set the initial value.
		fontSelect.val( value['font-family'].replace( /'/g, '"' ) ).trigger( 'change' );

		// When the value changes
		fontSelect.on( 'change', function() {

			// Set the value.
			control.saveValue( 'font-family', jQuery( this ).val() );

			// Re-init variants selector.
			control.renderVariantSelector();

			// Re-init subsets selector.
			control.renderSubsetSelector();
		});
	},

	/**
	 * Renders the variants selector using select2
	 * Displays font-variants for the currently selected font-family.
	 */
	renderVariantSelector: function() {

		var control    = this,
		    value      = control.getValue(),
			fontFamily = value['font-family'],
			variants   = control.getVariants( fontFamily ),
		    selector   = control.selector + ' .variant select',
		    data       = [],
		    isValid    = false,
		    variantSelector;

		if ( false !== variants ) {
			jQuery( control.selector + ' .variant' ).show();
			_.each( variants, function( variant ) {
				if ( value.variant === variant.id ) {
					isValid = true;
				}
				data.push({
					id: variant.id,
					text: variant.label
				});
			});
			if ( ! isValid ) {
				value.variant = 'regular';
				control.saveValue( 'variant', value.variant );
			}

			if ( jQuery( selector ).hasClass( 'select2-hidden-accessible' ) ) {
				jQuery( selector ).select2( 'destroy' );
				jQuery( selector ).empty();
			}

			// Instantiate select2 with the data.
			variantSelector = jQuery( selector ).select2({
				data: data
			});
			variantSelector.val( value.variant ).trigger( 'change' );
			variantSelector.on( 'change', function() {
				control.saveValue( 'variant', jQuery( this ).val() );
			});
		} else {
			jQuery( control.selector + ' .variant' ).hide();
		}
	},

	/**
	 * Renders the subsets selector using select2
	 * Displays font-subsets for the currently selected font-family.
	 */
	renderSubsetSelector: function() {

		var control    = this,
		    value      = control.getValue(),
			fontFamily = value['font-family'],
			subsets    = control.getSubsets( fontFamily ),
		    selector   = control.selector + ' .subsets select',
		    data       = [],
		    validValue = value.subsets,
		    subsetSelector;

		if ( false !== subsets ) {
			jQuery( control.selector + ' .subsets' ).show();
			_.each( subsets, function( subset ) {

				if ( _.isObject( validValue ) ) {
					if ( -1 === validValue.indexOf( subset.id ) ) {
						validValue = _.reject( validValue, function( subValue ) {
							return subValue === subset.id;
						});
					}
				}

				data.push({
					id: subset.id,
					text: subset.label
				});
			});

		} else {
			jQuery( control.selector + ' .subsets' ).hide();
		}

		if ( jQuery( selector ).hasClass( 'select2-hidden-accessible' ) ) {
			jQuery( selector ).select2( 'destroy' );
			jQuery( selector ).empty();
		}

		// Instantiate select2 with the data.
		subsetSelector = jQuery( selector ).select2({
			data: data
		});
		subsetSelector.val( validValue ).trigger( 'change' );
		subsetSelector.on( 'change', function() {
			control.saveValue( 'subsets', jQuery( this ).val() );
		});
	},

	/**
	 * Get fonts.
	 */
	getFonts: function() {
		var control = this;

		if ( ! _.isUndefined( window[ 'kirkiFonts' + control.id ] ) ) {
			return window[ 'kirkiFonts' + control.id ];
		}
		if ( ! _.isUndefined( kirkiAllFonts ) ) {
			return kirkiAllFonts;
		}
		return {
			google: [],
			standard: []
		};
	},

	/**
	 * Get variants for a font-family.
	 */
	getVariants: function( fontFamily ) {
		var control = this,
		    fonts   = control.getFonts();

		var variants = false;
		_.each( fonts.standard, function( font ) {
			if ( font.family === fontFamily.replace( /'/g, '"' ) ) {
				variants = font.variants;
				return font.variants;
			}
		});

		_.each( fonts.google, function( font ) {
			if ( font.family === fontFamily ) {
				variants = font.variants;
				return font.variants;
			}
		});
		return variants;
	},

	/**
	 * Get subsets for a font-family.
	 */
	getSubsets: function( fontFamily ) {

		var control = this,
		    subsets = false,
		    fonts   = control.getFonts();

		_.each( fonts.google, function( font ) {
			if ( font.family === fontFamily ) {
				subsets = font.subsets;
			}
		});
		return subsets;
	},

	/**
	 * Gets the value.
	 */
	getValue: function() {

		'use strict';

		var control   = this,
		    input     = control.container.find( '.typography-hidden-value' ),
		    valueJSON = jQuery( input ).val();

		return JSON.parse( valueJSON );
	},

	/**
	 * Saves the value.
	 */
	saveValue: function( property, value ) {

		'use strict';

		var control   = this,
		    input     = control.container.find( '.typography-hidden-value' ),
		    valueJSON = jQuery( input ).val(),
		    valueObj  = JSON.parse( valueJSON );

		valueObj[ property ] = value;
		control.setting.set( valueObj );
		jQuery( input ).attr( 'value', JSON.stringify( valueObj ) ).trigger( 'change' );

	}
});
