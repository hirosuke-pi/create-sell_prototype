<?php




?>

<!DOCTYPE HTML5>
<html>
    <head>
        <title>新規作成</title>
    </head>
    <body>
        <h1>クリエイトセル</h1>
        <a href="./index.php">ホーム</a>
        <hr>
        <form method="POST" action="./actions/register_account.php">
        <table border="1">
            <tr>
                <td colspan="5">
                    <h2>新規作成</h2>
                </td>
            </tr>
            <tr>
                <td>ユーザーID: </td>
                <td><input type="text" name="account_id"></td>
            </tr>
            <tr>
                <td>名前: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>住所: </td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>電話番号: </td>
                <td><input type="text" name="tel"></td>
            </tr>
            <tr>
                <td>メールアドレス: </td>
                <td><input type="text" name="mail"></td>
            </tr>
            <tr>
                <td>パスワード: </td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">作成</button></td>
            </tr>
        </table>
        </form>
    </body>
</html>