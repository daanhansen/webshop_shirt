<?php
echo 'Thanks for purchasing from our store,<br> The package will be delivered within 4 days.';

require('connect.php');

$id = $_GET['id'];
$size = $_GET['size'];
$color = $_GET['color'];
