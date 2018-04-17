<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="1">
    <th>ID</th>
    <th>户名</th>
    <th>密码</th>
    <th>内容</th>
    <th>时间</th>
    <th>操作</th>
    <?php foreach($data as $k =>$v):?>
        <tr>
            <td><?= $v->id?></td>
            <td><?= $v->name?></td>
            <td><?= $v->pwd?></td>
            <td><?= $v->content?></td>
            <td><?=$datetime='Y-m-d H:i:s'?></td>
            <td><a href="deletes?id=<?php echo $v->id ?>">删除</a>|<a href="updates?id=<?php echo $v->id ?>">修改</a></td>
        </tr>
    <?php endforeach?>
</table>
<a href="ad">添加</a>
<a href="login">登录时间插件</a>
<a href="log">轮播图插件</a>
</body>
</html>


