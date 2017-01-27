<html>
<head>
    <title>掲示板 </title>
</head>
<body>

<h1>掲示板 ほーむ</h1>
<p>ユーザ名：<u>{$usr_name}</u></p>
<ul>
    <li><a href = "logout_smarty.php">ログアウト</a></li>
    <li><a href = "update_smarty.php">更新</a></li>
    <li><a href = "delete_smarty.php">削除</a></li>
</ul>
<form method = "POST" action = "">

    <p>
        本文：(140字以内)<br />
        <input type = "text" name = "contents" size = "140" maxlength = "140"/>
    </p>


    <p>
        <input type = "submit" id = "inform" name = "inform" value = "投稿" />
    </p>
    <p style = "color:red">{$errorMsg|escape:"html"}</p>
    <p style = "color:blue">{$resultMsg|escape:"html"}</p>

    <p>投稿一覧</p>

    <table border = "1">
        <tr>
            <th>名前</th><th>本文</th>

        </tr>
        {foreach from = $rows item = row}
        <tr>

            <td>{$row.name|escape:"html"}</td>
            <td>{$row.contents|escape:"html"}</td>
        </tr>
        {/foreach}

    </table>

</form>
</body>
</html>
