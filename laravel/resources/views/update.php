<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="update" method="post" >
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <input type="hidden" name="id" value="<?=$arr->id?>">
    昵称：<input type="text" name="name" value="<?=$arr->name?>"><br>
    密码：<input type="pwd" name="pwd" value="<?=$arr->pwd?>"><br>
    <textarea name="content"  value="<?=$arr->content?>">
    </textarea>
    <input type="submit" value="修改">
</form>
</body>
</html>