<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="add" method="post">
    <input type="hidden" name="_token" value="<?=csrf_token(); ?>">
    昵称：<input type="text" name="name"><br>
<!--    密码：<input type="pwd" name="pwd"><br>-->
    内容：<textarea name="content">
    </textarea><br>
    时间：<input type="text" id="datetime">
    <input type="submit" value="添加"><br>
</form>
</body>
<script src="/public/layDate-v5.0.85/laydate/laydate.js"></script>
<script>
    //执行一个laydate实例
    laydate.render({
        elem: '#datetime'
//        ,type: 'year'        //年
//        ,type: 'month'
//        ,type: 'time'      //指定日历
//          ,type: 'datetime'
    });
</script>
</html>
