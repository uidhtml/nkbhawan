function exportJsonToHTML() {
  var html = '';
  EditorJsJson.blocks.forEach((block) => {
    switch (block.type) {
      case 'heading':
        html += `<h${block.data.level}>${block.data.text}</h${block.data.level}>`;
        break;
      case 'paragraph':
        html += `<p>${block.data.text}</p>`;
        break;
      case 'image':
        html += `<figure><img class="img-fluid" src="${block.data.file.url}"
            title="${block.data.caption}" /><figcaption>${block.data.caption}</<figcaption></figure>`;
        break;
      case 'list':
        html += '<ul>';
        block.data.items.forEach((li) => {
          html += `<li>${li}</li>`;
        });
        html += '</ul>';
        break;
      case 'delimiter':
        html += '<div class="delimiter"></div>';
        break;
      default:
        console.log('Unknown block type', block.type);
        break;
    }
  });
  return html;
}
