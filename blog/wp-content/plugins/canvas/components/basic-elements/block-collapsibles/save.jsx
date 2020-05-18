/**
 * WordPress dependencies
 */
const { Component } = wp.element;

const {
    InnerBlocks,
} = wp.editor;

/**
 * Component
 */
export default class CollapsiblesBlockSave extends Component {
	render() {
        return <InnerBlocks.Content />;
    }
}
