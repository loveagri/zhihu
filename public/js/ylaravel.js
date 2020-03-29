var editor = new wangEditor('#editor');

editor.customConfig.lang = {
    '设置标题': 'title',
    '正文': 'p',
    '链接文字': 'link text',
    '链接': 'link',
    '上传图片': 'upload image',
    '上传': 'upload',
    '创建': 'init',
    '字号':'size',
    '字体':'font',
    '宋体':'Song',
    '对齐方式':'alignment',
    '靠左':'left',
    '靠右':'right',
    '居中':'middle',
    '设置列表':'Song',
    '有序列表':'order list',
    '无序列表':'unordered list',
    '微软雅黑':'Microsoft YaHei',
    '文字颜色':'font color',
    '背景色':'background color',
};


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

$.ajaxSetup({
    header: {
        'X-CSRF-TOKEN': $('meto[name="csrf-token"]').attr('content')
    }
});

$('.like-button').click(function (event) {
    var target = $(event.target);
    var current_like = target.attr('like-value');
    var user_id = target.attr('like-user');
    console.log(current_like);
    if (current_like == 1) {
        $.ajax({
            url: "/user/" + user_id + "/unfan",
            method: 'POST',
            data: {_token: $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            success: function (data) {
                if (data.error !== 0) {
                    alert(data.msg);
                    returnl
                }

                target.attr('like-value', 0);
                target.removeClass('btn-success').addClass('btn-primary').text('关注')
            }
        })
    } else {
        $.ajax({
            url: "/user/" + user_id + "/fan",
            method: 'POST',
            data: {_token: $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            success: function (data) {
                if (data.error !== 0) {
                    alert(data.msg);
                    returnl
                }

                target.attr('like-value', 1);
                target.removeClass('btn-primary').addClass('btn-success').text('取消关注');
            }
        })
    }
});
