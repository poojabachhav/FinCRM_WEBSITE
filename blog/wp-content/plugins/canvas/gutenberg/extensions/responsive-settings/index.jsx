/**
 * Internal dependencies
 */
import isCoreBlockWithExt from '../../utils/is-core-block-with-ext';

const {
	canvasBreakpoints,
} = window;

/**
 * WordPress dependencies
 */
const { __ } = wp.i18n;

const {
	addFilter,
} = wp.hooks;

const {
	Component,
	Fragment,
} = wp.element;

const {
	createHigherOrderComponent,
} = wp.compose;

const { InspectorControls } = wp.editor;

const {
	PanelBody,
	ToggleControl,
} = wp.components;

const {
	hasBlockSupport,
} = wp.blocks;

/**
 * Extend block attributes with spacings.
 *
 * @param {Object} blockSettings Original block settings.
 * @param {String} name Original block name.
 *
 * @return {Object} Filtered block settings.
 */
function addAttribute( blockSettings, name ) {
	let supports = hasBlockSupport( name, 'canvasResponsive', false );

	// add support to core blocks
	if ( isCoreBlockWithExt( name ) ) {
		blockSettings.supports = {
			...blockSettings.supports,
			canvasResponsive: true,
		};
		supports = true;
	}

	if ( supports ) {
		if ( ! blockSettings.attributes ) {
			blockSettings.attributes = {};
		}

		// responsive attributes.
		Object.keys( canvasBreakpoints ).forEach( ( breakpoint ) => {
			if ( ! blockSettings.attributes[ `canvasResponsiveHide_${ breakpoint }` ] ) {
				blockSettings.attributes[ `canvasResponsiveHide_${ breakpoint }` ] = {
					type: 'boolean',
				};
			}
		} );
	}

	return blockSettings;
}

/**
 * Override the default edit UI to include a new block inspector control for
 * assigning the custom spacings if needed.
 *
 * @param {function|Component} BlockEdit Original component.
 *
 * @return {string} Wrapped component.
 */
const withInspectorControl = createHigherOrderComponent( ( OriginalComponent ) => {
	return class CanvasResponsiveWrapper extends Component {
		constructor() {
			super( ...arguments );

			this.getResponsiveStyles = this.getResponsiveStyles.bind( this );
		}

		/**
		 * Prepare styles to `hide` block.
		 *
		 * @returns {String} responsive styles.
		 */
		getResponsiveStyles() {
			const {
				attributes,
				clientId,
			} = this.props;

			const {
				canvasClassName,
			} = attributes;

			let customStyles = '';

			if ( canvasClassName ) {
				let prevBreakpoint = '';
				let max = Object.keys( canvasBreakpoints ).length - 1;
				const blockSelector = `#block-${ clientId }`;

				Object.keys( canvasBreakpoints ).forEach( ( breakpoint, i ) => {
					let media = '';

					if ( prevBreakpoint ) {
						if ( max === i ) {
							media = `(max-width: ${ prevBreakpoint.width }px)`;
						} else {
							media = `(min-width: ${ canvasBreakpoints[breakpoint].width + 1 }px) and (max-width: ${ prevBreakpoint.width }px)`;
						}
					} else {
						media = `(min-width: ${ canvasBreakpoints[breakpoint].width + 1 }px)`;
					}

					if ( attributes[ 'canvasResponsiveHide_' + breakpoint ] ) {
						customStyles += `
							@media ${ media } {
								${ blockSelector } > .block-editor-block-list__block-edit::before {
									background: rgba(0, 0, 0, 0.1) repeating-linear-gradient(125deg, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.05) 1px, transparent 2px, transparent 9px);
								}
								${ blockSelector } > .block-editor-block-list__block-edit > [data-block] {
									-webkit-filter: opacity(0.4) saturate(0);
									filter: opacity(0.4) saturate(0);
								}
							}
						`;
					}

					prevBreakpoint = canvasBreakpoints[ breakpoint ];
				} );
			}

			return customStyles;
		}

		render() {
			if ( ! hasBlockSupport( this.props.name, 'canvasResponsive', false ) ) {
				return <OriginalComponent { ...this.props } />;
			}

			const {
				setAttributes,
				attributes,
			} = this.props;

			// add new spacings controls.
			return (
				<Fragment>
					<OriginalComponent
						{ ...this.props }
						{ ...this.state }
						setState={ this.setState }
					/>
					<InspectorControls>
						<PanelBody
							title={ __( 'Responsive Settings' ) }
							initialOpen={ false }
						>
							{ Object.keys( canvasBreakpoints ).map( ( breakpoint ) => {
								return (
									<ToggleControl
										key={ breakpoint }
										label={ __( 'Hide On ' ) + canvasBreakpoints[breakpoint].label }
										checked={ attributes[ `canvasResponsiveHide_${ breakpoint }` ] }
										onChange={ () => {
											setAttributes( {
												[ `canvasResponsiveHide_${ breakpoint }` ]: ! attributes[ `canvasResponsiveHide_${ breakpoint }` ],
											} );
										} }
									/>
								);
							} ) }
						</PanelBody>
					</InspectorControls>
					<style>{ this.getResponsiveStyles() }</style>
				</Fragment>
			);
		}
	}
}, 'withInspectorControl' );

// Init filters.
addFilter( 'blocks.registerBlockType', 'canvas/responsive-settings/additional-attributes', addAttribute );
addFilter( 'editor.BlockEdit', 'canvas/responsive-settings/additional-attributes', withInspectorControl );
