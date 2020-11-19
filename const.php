<?php

// データベース
const DB_HOST = 'localhost';
const DB_NAME = 'create_sell';
const DB_USER = 'root';
const DB_PASS = '';

// アカウントフラグ
const ACCOUNT_WORKING = 0;    // 通常
const ACCOUNT_STOP = 1;       // 停止
const ACCOUNT_REMOVED = 2;    // 退会
const ACCOUNT_AUTH_WAIT = 3;  // 認証待ち
