<?php




?>

<!DOCTYPE HTML5>
<html>
    <head>
        <title>ログイン</title>
    </head>
    <body>
        <h1>クリエイトセル</h1>
        <a href="./index.php">ホーム</a>
        <hr>
        <form method="POST" action="./actions/login_account.php">
        <table border="1">
            <tr>
                <td colspan="5">
                    <h2>ログイン</h2>
                </td>
            </tr>
            <tr>
                <td>ユーザーID: <input type="text" name="user"></td>
            </tr>
            <tr>
                <td>パスワード: <input type="text" name="password"></td>
            </tr>
            <tr>
                <td><button type="submit">ログイン</button></td>
            </tr>
        </table>
        </form>
    </body>
</html>