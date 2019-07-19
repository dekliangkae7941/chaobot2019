<?php
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
