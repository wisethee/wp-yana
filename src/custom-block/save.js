import { useBlockProps } from "@wordpress/block-editor";

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 */
const Save = () => {
  return (
    <p {...useBlockProps.save()}>
      {"Custom Block hello from the saved content!"}
    </p>
  );
};

export default Save;
