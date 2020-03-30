<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="image/au.ico" />
    <title>AU Forum</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/wangEditor.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
</head>

<body class="body-background">



@yield("content")










<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/lib/jquery.min.js" crossorigin="anonymous"></script>
<script src="/js/lib/popper.min.js" crossorigin="anonymous"></script>
<script src="/js/lib/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="/js/wangEditor.min.js"></script>
<script src="/js/ylaravel.js"></script>
<script>

    function IsPC() {
        var userAgentInfo = navigator.userAgent;
        console.log(userAgentInfo)
        var Agents = ["Android", "iPhone",
            "SymbianOS", "Windows Phone",
            "iPad", "iPod"];
        var flag = true;
        for (var v = 0; v < Agents.length; v++) {
            if (userAgentInfo.indexOf(Agents[v]) > 0) {
                flag = false;
                break;
            }
        }
        return flag;
    }


    if (IsPC()){
        $('#login-form').removeClass('w-75').addClass('w-25');
        $('.body-background').removeClass('body-background-mobile').addClass('body-background-pc');
    }else{
        $('.container').css('marginTop','3em');
        $('#login-form').removeClass('w-25 ').addClass('w-75')
        $('.body-background').removeClass('body-background-pc').addClass('body-background-mobile')
    }
</script>

</body>
</html>
