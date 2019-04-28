var editor = new wangEditor('#editor');

var $textarea = $('#content');
editor.customConfig.onchange = function (html) {
    // 监控变化，同步更新到 textarea
    $textarea.val(html)
};
editor.customConfig.uploadFileName = 'wangEditorFile';

editor.customConfig.uploadImgServer = '/posts/image/upload';

// // 设置 headers（举例）
editor.customConfig.uploadHeaders = {
    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content'),
    '_token' : $('meta[name="csrf-token"]').attr('content'),
    'token' : $('meta[name="csrf-token"]').attr('content')
};



editor.create();


// 初始化 textarea 的值
$textarea.val(editor.txt.html());
