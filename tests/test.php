<?php
header("Content-type: text/html; charset=utf-8");

require_once __DIR__.'/../vendor/autoload.php';
use Yongze\ParseSql\Sql;


// 默认读取的sql语句是数组形式
$filePath = __DIR__.'/test.sql';
$sql = Sql::getSqlFromFile($filePath);
echo "【已数组形式返回sql语句】";
echo "<pre>";
var_dump($sql);
echo "</pre>";

// 读取的sql语句为一条语句
$sql = Sql::getSqlFromFile($filePath, true);
echo "【已单条语句形式返回sql语句】";
echo "<pre>";
var_dump($sql);
echo "</pre>";

// 替换表前缀
$sql = Sql::getSqlFromFile($filePath, false, array('my_' => 'me_'));
echo "【替换表前缀】";
echo "<pre>";
var_dump($sql);
echo "</pre>";
?>