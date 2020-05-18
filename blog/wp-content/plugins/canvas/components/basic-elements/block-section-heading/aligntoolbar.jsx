/**
 * WordPress dependencies
 */

const {
    __,
} = wp.i18n;

const {
	Component,
} = wp.element;

const {
	Toolbar,
} = wp.components;

/**
 * Component
 */
export default class ExtendAlignmentToolbar extends Component {
	constructor() {
		super( ...arguments );
	}

	render() {
		const DEFAULT_ALIGNMENT_CONTROLS = [
			{
				icon: 'editor-textcolor',
				title: __( 'Default Align Text' ),
				align: 'default',
			},
			{
				icon: 'editor-alignleft',
				title: __( 'Align Text Left' ),
				align: 'left',
			},
			{
				icon: 'editor-aligncenter',
				title: __( 'Align Text Center' ),
				align: 'center',
			},
			{
				icon: 'editor-alignright',
				title: __( 'Align Text Right' ),
				align: 'right',
			},
		];

		const {
			value,
			onChange,
			alignmentControls = DEFAULT_ALIGNMENT_CONTROLS,
			label = __( 'Change text alignment' ),
			isCollapsed = false,
		} = this.props;

		function applyOrUnset( align ) {
			return () => onChange( value === align ? undefined : align );
		}

		const activeAlignment = alignmentControls.find( function( control ) {
			return ( value === control.align || ( 'default' === control.align && ( 'none' === value || 'default' === value || ! value ) ) );
		} );

		return (
			<Toolbar
				isCollapsed={ isCollapsed }
				icon={ activeAlignment ? activeAlignment.icon : 'editor-textcolor' }
				label={ label }
				controls={ alignmentControls.map( ( control ) => {
					const { align } = control;

					const isActive = ( value === align || ( 'default' === align && ( 'none' === value || 'default' === value || ! value ) ) );

					return {
						...control,
						isActive,
						onClick: applyOrUnset( align ),
					};
			} ) }
		/>
		);
	}
}
