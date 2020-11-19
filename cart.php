<?php




?>

<!DOCTYPE HTML5>
<html>
    <head>
        <title>カート</title>
    </head>
    <body>
        <h1>クリエイトセル</h1>
        <a href="./index.php">ホーム</a>
        <hr>
        <form method="GET" action="./purchase.php">
        <table border="1">
            <tr>
                <td colspan="6">
                    <h2>カート</h2>
                </td>
            </tr>
            <tr>
                <td>商品画像</td>
                <td>商品名</td>
                <td>クリエイター</td>
                <td>値段</td>
                <td>時間</td>
                <td>アクション</td>
            </tr>
            <tr>
                <td><img src="./img/1.jpg">画像</td>
                <td><a href="./item.php?id=1">家具1</a></td>
                <td><a href="./user.php?id=1">hirosuke-pi</a></td>
                <td>1000円</td>
                <td>1:00:00</td>
                <td><button value="1">削除</button></td>
            </tr>
            <tr>
                <td><img src="./img/2.jpg">画像</td>
                <td><a href="./item.php?id=2">家具2</a></td>
                <td><a href="./user.php?id=1">hirosuke-pi</a></td>
                <td>1300円</td>
                <td>3:00:00</td>
                <td><button value="2">削除</button></td>
            </tr>
            <tr>
                <td colspan="6">
                    小計: 2300円 [+400円(手数料)]　　<a href="./purchase.php">購入確認ページへ</a>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>