<?php
/**
 * Created by PhpStorm.
 * User: Think
 * Date: 2015/10/10
 * Time: 15:29
 * 装配工艺编辑面板
 */
require_once('sql/mysql.php');
require_once('sql/operate.php');
session_start();
$user = $_SESSION['user'];
$level = $_SESSION[$user];
$db = new \sql\MysqlPDO($level);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>装配工艺管理</title>
</head>
    <link href="res/css/style.css" type="text/css" rel="stylesheet">
<body>

<h1>装配加工路线单</h1>

<h2>产品信息</h2>
<table width="100%">
    <?php
    $head = array(
        '产品型号',
        '生产批号',
        '工艺编号',
        '产品名称',
        '产品编号',
        '页码'
    );
    $table = key_value($head);
    key_value_table($table, 3);
    ?>
</table>
<h2>装配工艺</h2>
<table width="100%">
    <?php
    $head = array(
        '工序',
        '工序名称',
        '工序要求',
        '自检记录',
        '装配人员',
        '检验记录',
        '检验结论',
        '检验员',
        '见证',
        '工艺设备',
        '编辑'
    );
    simple_table($head);

    ?>
</table>
</body>
</html>