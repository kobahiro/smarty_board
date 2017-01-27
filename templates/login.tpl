
<!doctype html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>ログイン</title>
</head>
<body>
<h1>ログイン画面</h1>

<form id = "loginForm" name = "loginForm" action = "" method = "POST">
    <fieldset>
        <legend>ログインフォーム</legend>
        <div style = "color:red">{$errorMsg|escape:"html"}</div>
        <label for = "usr_id">ユーザーID</label><input type = "text" id = "usr_id" name = "usr_id" placeholder = "ユーザーIDを入力" value = "">
        <br>
        <label for = "password">パスワード</label><input type = "password" id = "password" name = "password" value = "" placeholder = "パスワードを入力">
        <br>
        <input type = "submit" id = "login" name = "login" value = "ログイン">
    </fieldset>

</form>
<br>
<form action = "register_smarty.php">
    <fieldset>
        <legend>新規登録フォーム</legend>
        <input type = "submit" value = "新規登録">
    </fieldset>
</form>
</body>
</html>