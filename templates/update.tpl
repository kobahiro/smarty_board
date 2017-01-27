
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>更新</title>
</head>
<body>
<h1>掲示板 更新</h1>

<p>ユーザ名：<u>{$usr_name}</u></p>
<ul>
    <li><a href="logout_smarty.php">ログアウト</a></li>
    <li><a href="delete_smarty.php">削除</a></li>
    <li><a href="update_smarty.php">更新</a></li>
    <li><a href="home_smarty.php">ほーむへ</a></li>
</ul>
<form method = "POST" action = "">

    <p>
        更新したい投稿のidを入力してください<br />
        <input type = "text" name = "update_id" size = "5"/>
    </p>
    <p>
        本文を入力してください：(140字以内)<br />
        <input type = "text" name = "contents" size = "140" maxlength = "140"/>
    </p>

    <p>
        <input type = "submit" id="update" name="update" value = "更新" />
    </p>
    <p style = "color:red">{$errorMsg|escape:"html"}</p>
    <p style = "color:blue">{$resultMsg|escape:"html"}</p>



    <table border = "1">
        <tbody>
        <tr>

            <th>id</th>
            <th>本文</th>
        </tr>
        {foreach from=$rows item=row}
            <tr>
                <td>{$row.id|escape:"html"}</td>
                <td>{$row.contents|escape:"html"}</td>
            </tr>
        {/foreach}
        </tbody></table>

</form>
</body>
</html>