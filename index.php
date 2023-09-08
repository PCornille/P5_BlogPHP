<!DOCTYPE HTML>
<html>
<head>
    <title>Titre</title></head>
<body>
<!--aussi <? ?> <% %> -->
<?php
echo '<pre>';
echo print_r($_SERVER);
echo '<pre>';
    echo 'query => '.$_GET['test'];
    echo '<br>';
    echo 'path => '.($_SERVER['PATH_INFO'] ?: 'root');
?>
</body>

</html>