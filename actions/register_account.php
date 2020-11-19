<?php

require_once '../const.php';
require_once '../func.php';

// 入力値チェック
if (!isset_list($_POST, ['account_id', 'name', 'address', 'tel', 'mail', 'password'])){
    die('アカウント作成情報が不十分です');
}


// アカウント作成
$link = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($link, 'utf8');
if (!$link) 
    die('Could not connect: ' . mysql_error());

// SQL作成
$_POST['flag'] = ACCOUNT_AUTH_WAIT;
$_POST['introduction'] = '';
$sql = create_insert_sql('users', $_POST);

echo $sql;
$result = mysqli_query($link, $sql);
$id = mysqli_insert_id($link);

var_dump($result);
