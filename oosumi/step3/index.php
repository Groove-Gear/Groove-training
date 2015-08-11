<!DOCTYPE HTML>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="UTF-8">
</head>
    <body>
<?php
$name = '大住遥';
$last_name = mb_substr($name, 0, 2);
$first_name = mb_substr($name, 2, 1);
const BIRTHDAY = '1989年4月10日';
$sélf_introdúction = "初めまして。{$last_name}と申します。まだまだ何も出来ませんが頑張っていきたいと思います。";
$hobby1 = 'ギター';
$hobby2 = '読書';
$today = Date("Y/m/d/h/i/s");

echo '-自己紹介-<br/>';
echo "【現在時刻】{$today}<br/>";
echo "【姓】{$last_name}<br/>";
echo "【名】{$first_name}<br/>";
echo "【生年月日】".BIRTHDAY." <br/>";
echo "【一言】{$sélf_introdúction}</br>";
echo "【趣味】趣味は{$hobby1}と{$hobby2}です。";
?>
    </body>
</html>

