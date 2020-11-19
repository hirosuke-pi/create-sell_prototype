<?php




?>

<!DOCTYPE HTML5>
<html>
    <head>
        <title>商品情報</title>
    </head>
    <body>
        <h1>クリエイトセル</h1>
        <a href="./index.php">ホーム</a>
        <hr>
        <form method="GET" action="./list.php">
        <table border="1">
            <tr>
                <td colspan="6">
                    <h2>商品情報</h2>
                </td>
            </tr>
            <tr>
                <td>商品画像</td>
                <td>商品名</td>
                <td>価格</td>
                <td>クリエイター</td>
                <td>紹介文</td>
                <td>ステータス</td>
            </tr>
            <tr>
                <td><img src="./img/1.jpg">画像</td>
                <td>家具1</td>
                <td>1000円</td>
                <td>hirosuke-pi</td>
                <td>ああああああああああああああああああああ</td>
                <td>ステータス:販売中　　<a href="./actions/add_cart.php?id=1">カートに追加</a></td>
            </tr>

            </tr>
        </table>
        </form>
    </body>
</html>