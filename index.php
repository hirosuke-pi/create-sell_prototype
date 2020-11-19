<?php




?>

<!DOCTYPE HTML5>
<html>
    <head>
        <title>ホーム</title>
    </head>
    <body>
        <h1>クリエイトセル</h1>
        <ul>
            <li><a href="./register.php">新規作成</a></li>
            <li><a href="./login.php">ログイン</a></li>
            <li><a href="./mypage.php">マイページ</a></li>
            <li><a href="./cart.php">カート</a></li>
            <li><a href="./exhibit.php">出品</a></li>
            <li><a href="./history.php">履歴</a></li>
        </ul>
        <hr>
        <form method="GET" action="./list.php">
        <table border="1">
            <tr>
                <td colspan="2"><h2>商品検索</h2></td>
            </tr>
            <tr>
                <td><input type="text" name="search"></td>
                <td><button type="submit">検索</button></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="radio" name="mode" value="partial" checked>部分一致　<input type="radio" name="mode" value="all">完全一致
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    カテゴリ: 
                    <a href="./list.php?category=furniture">家具</a>
                    <a href="./list.php?category=furniture">小物</a>
                    <a href="./list.php?category=furniture">家具</a>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>