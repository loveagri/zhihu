var editor = new wangEditor('#editor');

var $textarea = $('#content');
editor.customConfig.onchange = function (html) {
    $textarea.val(html)
};
editor.customConfig.uploadFileName = 'wangEditorFile';
editor.customConfig.uploadImgServer = '/posts/image/upload';
editor.customConfig.uploadImgParams = {
    _token: $('meta[name="csrf-token"]').attr('content')
};
editor.create();
editor.txt.html($textarea.val());
$textarea.val(editor.txt.html());
