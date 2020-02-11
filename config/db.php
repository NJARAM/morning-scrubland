<?php

//if (getenv("YII_ENV") == 'prod') {
    $url = parse_url(getenv("DATABASE_URL"));
    $dsn = 'pgsql:host='.$url['host'].';port='.$url['port'].';dbname='.substr($url["path"], 1);
    $username = $url["user"];
    $password = $url["pass"];
//}

//else {
//    $dsn = 'mysql:host=localhost;dbname=db_crudapp';
//    $username = 'root';
//    $password = '';
//}

return [
    'class' => 'yii\db\Connection',
    'dsn' => $dsn,
    'username' => $username,
    'password' => $password,
    'charset' => 'utf8',
];



