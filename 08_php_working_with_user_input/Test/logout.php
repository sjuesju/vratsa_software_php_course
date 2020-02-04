<?php
session_start();
session_destroy();
echo '<h1>Излязохте успешно</h1>';
header('location: index.php');
?>