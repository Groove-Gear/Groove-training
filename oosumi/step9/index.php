<!DOCTYPE HTML>
<html lang="ja">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="UTF-8">
    </head>
    <?php
    $animal = array('猫', '犬', '兎', '鼠', '猿', '鳥', '魚', '馬', '牛', '鹿');
    foreach ($animal as $value) {
        echo "この動物は{$value}です。";
    }
    ?>
    <br>
    <br>
    <?php
    $familyname = '山田';
    $sélf_introdúction = '宜しくお願いします';

    $prfiles = array(
        $prfile1 = array(
    '紹介' => '-自己紹介-<br/>',
    '時刻' => "【現在時刻】{$today}<br/>",
    '姓' => "【姓】$familyname<br/>",
    '名' => "【名】一郎<br/>",
    '歳' => "【生年月日】1月1日 <br/>",
    '一言' => "【一言】{$sélf_introdúction}</br>",
    '趣味' => "【趣味】将棋"),
        $prfile2 = array(
    '紹介' => '-自己紹介-<br/>',
    '時刻' => "【現在時刻】{$today}<br/>",
    '姓' => "【姓】$familyname<br/>",
    '名' => "【名】次郎<br/>",
    '歳' => "【生年月日】2月1日 <br/>",
    '一言' => "【一言】{$sélf_introdúction}</br>",
    '趣味' => "【趣味】チェス"),
        $prfile3 = array(
    '紹介' => '-自己紹介-<br/>',
    '時刻' => "【現在時刻】{$today}<br/>",
    '姓' => "【姓】$familyname<br/>",
    '名' => "【名】三郎<br/>",
    '歳' => "【生年月日】3月1日 <br/>",
    '一言' => "【一言】{$sélf_introdúction}</br>",
    '趣味' => "【趣味】花札"),
        $prfile4 = array(
    '紹介' => '-自己紹介-<br/>',
    '時刻' => "【現在時刻】{$today}<br/>",
    '姓' => "【姓】$familyname<br/>",
    '名' => "【名】史郎<br/>",
    '歳' => "【生年月日】4月1日<br/>",
    '一言' => "【一言】{$sélf_introdúction}</br>",
    '趣味' => "【趣味】ダーツ")
    );

    foreach ($prfiles as $key => $value){
        echo "[$key]";
    }