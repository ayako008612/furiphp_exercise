<?php
require_once __DIR__ . "/chap4_area.php";
$top = 10;
$bottom = 20;
$height = 30;
$area = calc_area($top,$bottom,$height,$area);{
display_msg($top,$bottom,$height,$area);
}
$top = 40;
$bottom = 50;
$height = 60;
$area = calc_area($top,$bottom,$height,$area);{
display_msg($top,$bottom,$height,$area);
}
?>