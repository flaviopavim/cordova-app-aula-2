<?php
$html = file_get_contents('http://localhost/hello/ws/pg/home.php');
$json['return'] = $html;
echo json_encode($json);