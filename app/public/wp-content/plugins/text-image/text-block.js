/* This section of the code registers a new block, sets an icon and a category, and indicates what type of fields it'll include. */

wp.blocks.registerBlockType("brad/image-text", {
  title: "Image text Box",
  icon: "smiley",
  category: "common",
  attributes: {
    header1: { type: "string" },
    header2: { type: "string" },
    content: { type: "string" },
    imgURL: {
      type: "string",
      source: "attribute",
      attribute: "src",
      selector: "img"
    },
    imgID: {
      type: "number"
    },
    imgAlt: {
      type: "string",
      source: "attribute",
      attribute: "alt",
      selector: "img"
    }
  },

  /* This configures how the content and color fields will work, and sets up the necessary elements */

  edit: props => {
    function updateContent(event) {
      props.setAttributes({ content: event.target.value });
    }

    function updateHeader1(event) {
      props.setAttributes({ header1: event.target.value });
    }

    function updateHeader2(event) {
      props.setAttributes({ header2: event.target.value });
    }

    const onSelectImage = img => {
      setAttributes({
        imgID: img.id,
        imgURL: img.url,
        imgAlt: img.alt
      });
    };

    const onRemoveImage = () => {
      setAttributes({
        imgID: null,
        imgURL: null,
        imgAlt: null
      });
    };

    return React.createElement(
      "div",
      null,
      React.createElement("input", {
        type: "text",
        value: props.attributes.header1,
        onChange: updateHeader1
      }),
      React.createElement("input", {
        type: "text",
        value: props.attributes.header2,
        onChange: updateHeader2
      }),
      React.createElement("input", {
        type: "text",
        value: props.attributes.content,
        onChange: updateContent
      })
    );
  },
  save: props => {
    const { imgURL, imgAlt } = props.attributes;
    return (
      <p>
        <img src={imgURL} alt={imgAlt} />
      </p>
    );
  }
});
