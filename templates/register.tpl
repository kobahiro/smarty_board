
<!doctype html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>新規登録</title>
</head>
<body>
<h1>新規登録画面</h1>


<form id = "loginForm" name = "loginForm" action = "" method = "POST">
    <fieldset>
        <legend>新規登録フォーム</legend>
        <div style = "color:red">{$errorMsg}</div>
        <div style = "color:blue">{$signUpMsg}</div>
        <label for = "username">ユーザー名</label><input type = "text" id = "name" name = "name" placeholder = "ユーザー名を入力" maxlength = "30" value = "">(30字以内)
        <br>
        <label for = "usr_id">ユーザーID</label><input type = "usr_id" id = "usr_id" name = "usr_id" value = "" placeholder = "ユーザーIDを入力">(半角英数字6桁)
        <br>
        <label for = "password">パスワード</label><input type = "password" id = "password" name = "password" value = "" placeholder = "パスワードを入力">(半角英数字8-16桁)
        <br>
        <label for = "password2">パスワード(確認用)</label><input type = "password" id = "password2" name = "password2" value = "" placeholder = "再度パスワードを入力">
        <br>
        <input type = "submit" id = "signUp" name = "signUp" value = "新規登録">
    </fieldset>
</form>
<br>

<form action = "login_smarty.php">
    <input type = "submit" value = "戻る">
</form>
</body>
</html>