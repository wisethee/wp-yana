import { useBlockProps } from "@wordpress/block-editor";

import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 */
const Edit = () => {
  return <p {...useBlockProps()}>{"Custom Block - hello from the editor!"}</p>;
};

export default Edit;
