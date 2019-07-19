<?php
    $Setup_Server = '127.0.0.1';
    $Setup_User = 'root';
    $Setup_Pwd = '79417941';
    $Setup_Database = 'chatbot';
    mysql_connect($Setup_Server,$Setup_User,$Setup_Pwd);
    mysql_query("chatbot $Setup_Database");
    mysql_query("SET NAMES UTF8");

echo '<div style="font-size:14px">';

echo '--------------------------------------------------------------------';
echo '<pre>';
echo '<b>แสดงค่าตัวแปร  id</b>', "\n";
echo '$_GET[\'id\'] = ', $_GET['id'], "\n";
echo '$_POST[\'id\'] = ', $_POST['id'], "\n";
echo '$_REQUEST[\'id\'] = ', $_REQUEST['id'], "\n";
echo '</pre>';
echo '--------------------------------------------------------------------';

echo '<pre>';
echo '<b>แสดงค่าตัวแปร  nickname</b>', "\n";
echo '$_GET[\'nickname\'] = ', $_GET['nickname'], "\n";
echo '$_POST[\'nickname\'] = ', $_POST['nickname'], "\n";
echo '$_REQUEST[\'nickname\'] = ', $_REQUEST['nickname'], "\n";
echo '</pre>';
echo '--------------------------------------------------------------------';

echo '<pre>';
echo '<b>แสดงค่าตัวแปร  telephone</b>', "\n";
echo '$_GET[\'telephone\'] = ', $_GET['telephone'], "\n";
echo '$_POST[\'telephone\'] = ', $_POST['telephone'], "\n";
echo '$_REQUEST[\'telephone\'] = ', $_REQUEST['telephone'], "\n";
echo '</pre>';
echo '--------------------------------------------------------------------';

echo '</div>';
?>
