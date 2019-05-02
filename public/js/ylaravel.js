

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

$.ajaxSetup({
    header:{
        'X-CSRF-TOKEN':$('meto[name="csrf-token"]').attr('content')
    }
});

$('.like-button').click(function (event) {
    var target = $(event.target);
    var current_like = target.attr('like-value');
    var user_id = target.attr('like-user');
console.log(current_like);
    if (current_like == 1){
        $.ajax({
            url:"/user/" + user_id + "/unfan",
            method:'POST',
            data:{_token: $('meta[name="csrf-token"]').attr('content')},
            dataType:'json',
            success:function (data) {
                if (data.error !== 0){
                    alert(data.msg);
                    returnl
                }

                target.attr('like-value',0);
                target.removeClass('btn-success').addClass('btn-primary').text('关注')
            }
        })
    } else {
        $.ajax({
            url:"/user/" + user_id + "/fan",
            method:'POST',
            data:{_token: $('meta[name="csrf-token"]').attr('content')},
            dataType:'json',
            success:function (data) {
                if (data.error !== 0){
                    alert(data.msg);
                    returnl
                }

                target.attr('like-value',1);
                target.removeClass('btn-primary').addClass('btn-success').text('取消关注');
            }
        })
    }
});
