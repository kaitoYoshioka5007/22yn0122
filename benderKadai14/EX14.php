<?php

$base = $_GET['base'];
$height = $_GET['height'];
echo "底辺は{$base}<br>";
echo "高さは{$height}<br>";

$area = $base * $height / 2;
echo "三角形の面積は{$area}<br>";
