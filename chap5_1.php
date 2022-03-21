<?php
function h($constellation) {
    return htmlspecialchars($constellation, ENT_QUOTES, "UTF-8");
}
$signs = filter_input(INPUT_GET, "sings", FILTER_VALIDATE_INT);

$signs = [
        ["name" => "牡羊座", "period_start" => [3, 21], "period_end" => [4, 19]],
        ["name" => "牡牛座", "period_start" => [4, 20], "period_end" => [5, 20]],
        ["name" => "双子座", "period_start" => [5, 21], "period_end" => [6, 21]],
        ["name" => "蟹座", "period_start" => [6, 22], "period_end" => [7, 22]],
        ["name" => "獅子座", "period_start" => [7, 23], "period_end" => [8, 22]],
        ["name" => "乙女座", "period_start" => [8, 23], "period_end" => [9, 22]],
        ["name" => "天秤座", "period_start" => [9, 23], "period_end" => [10, 23]],
        ["name" => "蠍座", "period_start" => [10, 24], "period_end" => [11, 22]],
        ["name" => "射手座", "period_start" => [11, 23], "period_end" => [12, 21]],
        ["name" => "山羊座", "period_start" => [12, 22], "period_end" => [1, 19]],
        ["name" => "水瓶座", "period_start" => [1, 20], "period_end" => [2, 18]],
        ["name" => "魚座", "period_start" => [2, 19], "period_end" => [3, 20]]
];
foreach($signs as $sign){
    display_msg($sign);
}
$start_m = ["period_start"];
foreach($start_m as $t0){
    foreach($start_d as $t1){
        foreach($end_m as $t0){
            foreach(end_d as $t1){
}
if($month >= $period_start && $day <= $period_end){
}    else ($month = $period_end && $day > $period_end);
        echo $name;
}
'$month,$day' = filter_input(INPUT_GET, "month,day", FILTER_VALIDATE_INT);
}
$sign = constellation($sign["period_start"]);{
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>星座チェック</title>
    </head>
    <body>
        <h1>星座テェック</h1>
    </body>
</html>
<?php if (empty($month or $day)):?>
    <p>月日を入力してください</p>
    <form method="get">
        <label>月</label>:
        <input name="month" type="number" min="1" max="12" method="<?= h(date("Y")) ?>">
        <label>日</label>:
        <input name="day" type="number" min="1" max="31" method="<?= h(date("Y")) ?>">
        <input type="OK" >"<?= h(date("Y")) ?>">      
    </form>
<?php else: ?>
    <p><?= h($month) ?>月<?= h($day) ?>日生まれは<?= sings($name) ?>です。</p>
<?php endif; ?>
