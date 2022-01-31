function tinymce_setup_callback(editor) {
    editor.remove();
    editor = null;

    tinymce.init({
        branding: false,
        menubar: false,
        selector: "textarea",
        language: "ru",
        skin_url:
            $('meta[name="assets-path"]').attr("content") +
            "?path=js/skins/voyager",
        min_height: 100,
        height: 200,
        resize: "vertical",
        inline_styles: false,
        keep_styles: false,
        plugins: "link, image, code, table, youtube, giphy, textcolor, lists",
        extended_valid_elements:
            "input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]",
        file_browser_callback: function(field_name, url, type, win) {
            if (type == "image") {
                $("#upload_file").trigger("click");
            }
        },
        toolbar:
            "removeformat | styleselect bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code",
        fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
        convert_urls: false,
        image_caption: true,
        image_title: true,
        paste_word_valid_elements: "p,b,strong,i,em,u,h1,h2,h3,h4,ol,ul,li",
        forced_root_block: false,
        force_p_newlines: false,
        force_br_newlines: true
    });
}
