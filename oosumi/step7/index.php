<!DOCTYPE HTML>
<html lang="ja">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="UTF-8">
    </head>
    <?php
    $name = array('大住', '遥');
            const BIRTHDAY = '1989年4月10日';
    $sélf_introdúction = "初めまして。$name[0]と申します。まだまだ何も出来ませんが頑張っていきたいと思います。";
    $hobby = array('ギター', '読書');
    $detail = array(
        array('Takamine', 'ibanez'),
        array('湊かなえ', '乙一')
    );
    $today = Date("Y/m/d/h/i/s");
    $count = 1;

    $prfile = array(
        '紹介' => '-自己紹介-<br/>',
        '時刻' => "【現在時刻】{$today}<br/>",
        '姓' => "【姓】$name[0]<br/>",
        '名' => "【名】$name[1]<br/>",
        '歳' => "【生年月日】" . BIRTHDAY . " <br/>",
        '一言' => "【一言】{$sélf_introdúction}</br>",
        '趣味' => "【趣味】趣味は$hobby[0]と$hobby[1]です。使っている$hobby[0]は" . $detail[0][0] . "と" . $detail[0][1] . "で、好きな作家は" . $detail[1][0] . "と" . $detail[1][1] . "です。"
    );

    while ($count <= 10) {
        
        echo "{$count}回目の表示です。<br/>";
        echo $prfile['紹介'];
        echo $prfile['時刻'];
        echo $prfile['姓'];
        echo $prfile['名'];
        echo $prfile['歳'];
        echo $prfile['一言'];
        echo $prfile['趣味'];
        echo "<br/>";
        echo "<br/>";

        $count++;
    }
    

