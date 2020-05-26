<script src="<?php echo $root_url; ?>/js/editor.js"></script>
<script src="<?php echo $root_url; ?>/js/header.js"></script>
<script src="<?php echo $root_url; ?>/js/link-tool.js"></script>
<!-- <script src="<?php echo $root_url; ?>/js/simple-image.js"></script>
<script src="<?php echo $root_url; ?>/js/image-tool.js"></script> -->
<script src="<?php echo $root_url; ?>/js/list-tool.js"></script>
<script src="<?php echo $root_url; ?>/js/paragraph.js"></script>
<script src="<?php echo $root_url; ?>/js/quote.js"></script>
<script src="<?php echo $root_url; ?>/js/delimiter.js"></script>
<script src="<?php echo $root_url; ?>/js/table.js"></script>
<script src="<?php echo $root_url; ?>/js/warning.js"></script>
<!-- <script src="<?php echo $root_url; ?>/js/personality.js"></script> -->
<script>
    //var editorData = {"time":1550476186479,"blocks":[{"type":"heading","data":{"text":"Editor.js","level":2}},{"type":"paragraph","data":{"text":"Hey. Meet the new Editor. On this page you can see it in action — try to edit this text. Source code of the page contains the example of connection and configuration."}},{"type":"heading","data":{"text":"Key features","level":3}}],"version":"2.8.1"};
    var editorSettings = {
        holder : 'editorjs',
        logLevel: 'ERROR',
        tools: {
            heading: {
                class: Header,
                inlineToolbar : true
            },
            linkTool: {
                class: LinkTool,
            config: {
                endpoint: 'http://localhost:8008/fetchUrl', // Your backend endpoint for url data fetching
            }
            },
            // image: SimpleImage,
            // image: {
            //   class: ImageTool,
            //   config: {
            //       endpoints: {
            //       byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
            //       byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
            //     }
            //   }
            // },
            list: {
                class: List,
                inlineToolbar: true,
            },
            quote: Quote,
            paragraph: {
                class: Paragraph,
                inlineToolbar: true,
            },
            delimiter: Delimiter,
            table: {
                class: Table,
            },
            warning: Warning,
            // personality: {
            //   class: Personality,
            //   config: {
            //     endpoint: 'http://localhost:8008/uploadFile'  // Your backend file uploader endpoint
            //   }
            // }
        },
        autofocus: true,
    }
</script>