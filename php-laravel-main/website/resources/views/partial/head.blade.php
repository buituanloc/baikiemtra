<link rel="shortcut icon" href="{{asset('backend/image/favicon.ico')}}"/>
<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/typography.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
<link href="{{asset('backend/fullcalendar/core/main.css')}}" rel='stylesheet' />
<link href="{{asset('backend/fullcalendar/daygrid/main.css')}}" rel='stylesheet' />
<link href="{{asset('backend/fullcalendar/timegrid/main.css')}}" rel='stylesheet' />
<link href="{{asset('backend/fullcalendar/list/main.css')}}" rel='stylesheet' />
<link rel="stylesheet" href="{{asset('backend/css/flatpickr.min.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">


<script src="https://cdn.tiny.cloud/1/mk69788v7tsx0cmwwr9lyp9a26e4onnb5s9m9uk9bc4m40az/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#postContent',
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
    tinymce.init({
        selector: 'textarea#post_description',
        height:300,
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'link image | ' +
            'forecolor backcolor emoticons | help',
        content_css: false,
        menu: false,
        menubar: false,
    });
    tinymce.init({
        selector: 'textarea#seoDescription',
        height:300,
        toolbar: 'undo redo',
        content_css: false,
        menu: false,
        menubar: false,
    });

</script>
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
