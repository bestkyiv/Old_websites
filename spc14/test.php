<?php
echo $_SERVER['REQUEST_URI'].'<br />';
echo PHP_EOL;
echo 'page='.$_GET['page'].'<br />';
if (file_exists($_GET['page'].'.php')) echo 'Ура! Ты нашёл сокровище!!!.<br />';
else echo 'Иди нахуй..<br />';
?>