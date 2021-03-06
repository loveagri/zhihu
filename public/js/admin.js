$('.post-audit').click(function (event) {
    target = $(event.target);
    var post_id = target.attr('post-id');
    var status = target.attr('post-action-status');

    $.ajax({
        url: '/admin/posts/' + post_id + '/status',
        method: 'POST',
        data: {'status': status, '_token': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'json',
        success: function (data) {
            if (data.error != 0) {
                alert(data.msg);
                return
            }

            target.parent().parent().remove();
        }
    })
});


$(".resource-delete").click(function (event) {
    if (confirm("delete?") === false) {
        return;
    }

    var target = $(event.target);
    event.preventDefault();
    var url = $(target).attr("delete-url");
    $.ajax({
        url: url,
        method: "POST",
        data: {"_method": 'DELETE', '_token': $('meta[name="csrf-token"]').attr('content')},
        dataType: "json",
        success: function (data) {
            if (data.error !== 0) {
                alert(data.msg);
                return;
            }

            target.parent().parent().remove();
        }
    });
});
