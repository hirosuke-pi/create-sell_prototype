<?php




?>

<!DOCTYPE HTML5>
<html>
    <head>
        <title>購入確認</title>
    </head>
    <body>
        <h1>クリエイトセル</h1>
        <a href="./index.php">ホーム</a>
        <hr>
        <form method="GET" action="./actions/purchase_cart.php">
        <table border="1">
            <tr>
                <td colspan="7">
                    <h2>購入確認</h2>
                </td>
            </tr>
            <tr>
                <td>購入日時</td>
                <td>商品画像</td>
                <td>商品名</td>
                <td>クリエイター</td>
                <td>値段</td>
                <td>取引</td>
                <td>ステータス</td>
            </tr>
            <tr>
                <td>2020/11/24</td>
                <td><img src="./img/1.jpg">画像</td>
                <td><a href="./item.php?id=1">商品名1</a></td>
                <td><a href="./user.php?id=1">hirosuke-pi</a></td>
                <td>1000円</td>
                <td><a href="./item.php?id=1">取引画面へ</a></td>
                <td>配送中</td>
            </tr>
            <tr>
                <td>2020/11/1</td>
                <td><img src="./img/2.jpg">画像</td>
                <td><a href="./item.php?id=2">商品名2</a></td>
                <td><a href="./user.php?id=1">hirosuke-pi</a></td>
                <td>1300円</td>
                <td><a href="./item.php?id=1">取引画面へ</a></td>
                <td>取引完了</td>
            </tr>
        </table>
        </form>
    </body>
</html>