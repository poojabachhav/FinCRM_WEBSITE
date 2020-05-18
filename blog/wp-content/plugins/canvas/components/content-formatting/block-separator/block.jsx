/**
 * Internal dependencies
 */
import {
	replaceClass,
	getActiveClass,
} from '../../../gutenberg/utils/classes-replacer';

/**
 * WordPress dependencies
 */
const {
	__,
} = wp.i18n;

const {
	Component,
	Fragment,
} = wp.element;

const {
	PanelBody,
	RangeControl,
} = wp.components;

const {
	InspectorControls,
} = wp.editor;

const {
	addFilter,
} = wp.hooks;

const {
	createHigherOrderComponent,
} = wp.compose;

const {
	withDispatch,
} = wp.data;

const {
	registerBlockStyle,
} = wp.blocks;

/*
 * core/separator
 */
registerBlockStyle( 'core/separator', {
	name: 'cnvs-separator-double',
	label: __( 'Double' ),
} );
registerBlockStyle( 'core/separator', {
	name: 'cnvs-separator-dotted',
	label: __( 'Dotted' ),
} );
registerBlockStyle( 'core/separator', {
	name: 'cnvs-separator-dashed',
	label: __( 'Dashed' ),
} );


/**
 * Extend block attributes with unique id.
 *
 * @param {Object} blockSettings Original block settings.
 * @param {String} name Original block name.
 *
 * @return {Object} Filtered block settings.
 */
function addAttribute( blockSettings, name ) {
	if ( 'core/separator' === name) {
		if ( ! blockSettings.attributes.canvasBlockId ) {
			blockSettings.attributes.canvasBlockId = {
				type: 'string',
			};
		}
		if ( ! blockSettings.attributes.canvasHeight ) {
			blockSettings.attributes.canvasHeight = {
				type: 'number',
				default: 10,
			};
		}
	}

	return blockSettings;
}


/**
 * Override the default edit UI to include a new block inspector control for
 * assigning the custom styles if needed.
 *
 * @param {function|Component} BlockEdit Original component.
 *
 * @return {string} Wrapped component.
 */
const separatorWithCanvasHeight = createHigherOrderComponent( ( BlockEdit ) => {
	class NewEdit extends Component {
		constructor() {
			super( ...arguments );

			this.isSeparator = this.isSeparator.bind( this );
			this.maybeCreateUniqueId = this.maybeCreateUniqueId.bind( this );
			this.getSeparatorUniqClassName = this.getSeparatorUniqClassName.bind( this );
			this.updateSeparatorUniqClassName = this.updateSeparatorUniqClassName.bind( this );
		}

		componentDidMount() {
			this.maybeCreateUniqueId();
		}
		componentDidUpdate() {
			this.maybeCreateUniqueId();
		}

		isSeparator() {
			return 'core/separator' === this.props.name;
		}

		/**
		 * Generate unique block id
		 */
		maybeCreateUniqueId() {
			if ( ! this.isSeparator() ) {
				return;
			}

			const {
				attributes,
				setAttributes,
			} = this.props;

			const {
				canvasBlockId,
			} = attributes;

			if ( ! canvasBlockId ) {
				setAttributes( {
					canvasBlockId: new Date().getTime(),
				} );
			} else {
				this.updateSeparatorUniqClassName();
			}
		}

		/**
		 * Get uniq classname.
		 *
		 * @return {String}
		 */
		getSeparatorUniqClassName() {
			const {
				attributes,
			} = this.props;

			return getActiveClass( attributes.className, 'is-cnvs-separator-id' );
		}

		/**
		 * Update height classname on the block.
		 */
		updateSeparatorUniqClassName() {
			const {
				attributes,
				onChangeClassName,
			} = this.props;

			const {
				canvasBlockId,
			} = attributes;

			if ( canvasBlockId ) {
				const updatedClassName = replaceClass( attributes.className, 'is-cnvs-separator-id', canvasBlockId );

				onChangeClassName( updatedClassName );
			}
		}

		render() {
			const {
				attributes,
				setAttributes,
				clientId,
			} = this.props;

			if ( ! this.isSeparator() || ! getActiveClass( attributes.className, 'is-style-pk' ) || ! clientId ) {
				return <BlockEdit { ...this.props } />;
			}

			const {
				canvasBlockId,
				canvasHeight,
			} = attributes;

			return (
				<Fragment>
					<InspectorControls>
						<PanelBody>
							<RangeControl
								label={ __( 'Height' ) }
								value={ canvasHeight }
								onChange={ ( val ) => {
									setAttributes( { canvasHeight: val } );
								} }
							/>
						</PanelBody>
					</InspectorControls>
					<BlockEdit { ...this.props } />
					{ canvasBlockId && typeof canvasHeight !== 'undefined' ? (
						<style>
							{ `
							[data-block] > .${ this.getSeparatorUniqClassName() } {
								height: ${ canvasHeight }px !important;
							}
							` }
						</style>
					) : '' }
				</Fragment>
			);
		}
	}

	return withDispatch( ( dispatch, { clientId } ) => {
		return {
			onChangeClassName( newClassName ) {
				dispatch( 'core/block-editor' ).updateBlockAttributes( clientId, {
					className: newClassName,
				} );
			},
		};
	} )( NewEdit );
}, 'separatorWithCanvasHeight' );

addFilter( 'blocks.registerBlockType', 'canvas/separator/unique-id/additional-attributes', addAttribute );
addFilter( 'editor.BlockEdit', 'canvas/separator/height', separatorWithCanvasHeight );
