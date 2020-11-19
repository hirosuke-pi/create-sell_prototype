<?php




?>

<!DOCTYPE HTML5>
<html>
    <head>
        <title>検索結果</title>
    </head>
    <body>
        <h1>クリエイトセル</h1>
        <a href="./index.php">ホーム</a>
        <hr>
        <form method="GET" action="./list.php">
        <table border="1">
            <tr>
                <td colspan="3">
                    <h2>検索結果</h2>
                </td>
            </tr>
            <tr>
                <td>画像</td>
                <td>商品名</td>
                <td>値段</td>
            </tr>
            <tr>
                <td><img src="./img/.png">画像</td>
                <td><a href="./item.php?id=1">家具1</a></td>
                <td>1300円</td>
            </tr>
            <tr>
                <td><img src="./img/.png">画像</td>
                <td><a href="./item.php?id=1">家具2</a></td>
                <td>3000円</td>
            </tr>
            <tr>
                <td><img src="./img/.png">画像</td>
                <td><a href="./item.php?id=1">家具3</a></td>
                <td>7000円</td>
            </tr>
        </table>
        </form>
    </body>
</html>