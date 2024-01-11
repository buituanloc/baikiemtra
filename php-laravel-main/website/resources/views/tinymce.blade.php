<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laracoding.com TinyMCE Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/mk69788v7tsx0cmwwr9lyp9a26e4onnb5s9m9uk9bc4m40az/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
        tinymce.init({
            selector: 'textarea',
            height:600,
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
                'media', 'table', 'emoticons', 'template', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: false,
            file_picker_callback (callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
                let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

                tinymce.activeEditor.windowManager.openUrl({
                    url : '/file-manager/tinymce5',
                    title : 'Laravel File manager',
                    width : x * 0.8,
                    height : y * 0.8,
                    onMessage: (api, message) => {
                        console.log(message)
                        let url = message.content;  // Lấy ra url của file ảnh
                        url = url.replace(/^.*\/\/[^\/]+/, ''); // Xóa domain ảnh
                        message.content = url // Gán lại url cho ảnh
                        callback(message.content, { text: message.text })
                    },

                })}
        });
    </script>
</head>
<body>
<h2>Laracoding.com - TinyMCE Example</h2>
<div id="fm" style="height: 600px;"></div>
<div class="input-group">
    <input type="text" id="image_label" class="form-control" name="image"
           aria-label="Image" aria-describedby="button-image">
    <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
    </div>
</div>
<form action="" method="get">
    <div class="mb-3">
        <label for="pwd">TinyMCE input:</label>
        <textarea class="tinyMce" name="user-bio"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script >
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('button-image').addEventListener('click', (event) => {
            event.preventDefault();

            window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        });
    });
    // set file link
    function fmSetLink($url) {
        // cấu hình link
        document.getElementById('image_label').value = $url;
    }
</script>
</body>
</html>
