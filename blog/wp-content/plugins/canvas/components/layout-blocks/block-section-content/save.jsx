/**
 * WordPress dependencies
 */
const {
	Component,
} = wp.element;

const {
    InnerBlocks,
} = wp.editor;

/**
 * Component
 */
export default class SectionContentBlockSave extends Component {
	render() {
		return <InnerBlocks.Content />;
    }
}
