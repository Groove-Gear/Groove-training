<!DOCTYPE HTML>
<html lang="ja">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
                const BIRTHDAY = '1989年4月10日';

        function show_myprofile() {

            $name = array('大住', '遥');

            $sélf_introdúction = "初めまして。$name[0]と申します。まだまだ何も出来ませんが頑張っていきたいと思います。";
            $hobby = array('ギター', '読書');
            $detail = array(
                array('Takamine', 'ibanez'),
                array('湊かなえ', '乙一')
            );
            $today = Date("Y/m/d/h/i/s");

            echo '-自己紹介-<br/>';
            echo "【現在時刻】{$today}<br/>";
            echo "【姓】$name[0]<br/>";
            echo "【名】$name[1]<br/>";
            echo "【生年月日】" . BIRTHDAY . " <br/>";
            echo "【一言】{$sélf_introdúction}</br>";
            echo "【趣味】趣味は$hobby[0]と$hobby[1]です。使っている$hobby[0]は" . $detail[0][0] . "と", $detail[0][1] . "で、好きな作家は" . $detail[1][0] . "と" . $detail[1][1] . "です。</br></br>";
        }

        $profile = show_myprofile();
        echo "$profile";

        function get_neweto() {
            $ad = 2015 % 12;
            if ($ad === 0) {
                $eto = "申";
            } elseif ($ad === 1) {
                $eto = "酉";
            } elseif ($ad === 2) {
                $eto = "戌";
            } elseif ($ad === 3) {
                $eto = "亥";
            } elseif ($ad === 4) {
                $eto = "子";
            } elseif ($ad === 5) {
                $eto = "丑";
            } elseif ($ad === 6) {
                $eto = "寅";
            } elseif ($ad === 7) {
                $eto = "卯";
            } elseif ($ad === 8) {
                $eto = "辰";
            } elseif ($ad === 9) {
                $eto = "巳";
            } elseif ($ad === 10) {
                $eto = "午";
            } elseif ($ad === 11) {
                $eto = "未";
            }

            return $eto;
        }

        $eto = get_neweto();
        echo "今年の干支は{$eto}です。<br/>";

        function get_eto($birthyear) {
            $ad = $birthyear % 12;

            if ($ad === 0) {
                $birth = "申";
            } elseif ($ad === 1) {
                $birth = "酉";
            } elseif ($ad === 2) {
                $birth = "戌";
            } elseif ($ad === 3) {
                $birth = "亥";
            } elseif ($ad === 4) {
                $birth = "子";
            } elseif ($ad === 5) {
                $birth = "丑";
            } elseif ($ad === 6) {
                $birth = "寅";
            } elseif ($ad === 7) {
                $birth = "卯";
            } elseif ($ad === 8) {
                $birth = "辰";
            } elseif ($ad === 9) {
                $birth = "巳";
            } elseif ($ad === 10) {
                $birth = "午";
            } elseif ($ad === 11) {
                $birth = "未";
            }

            return $birth;
        }

        $by = 1989;
        $birth = get_eto($by);
        echo "私は{$birth}年です。<br/><br/>";

        function set_profiles($today, $name, $sélf_introdúction, $hobby, $detail) {
            $profile = array(
                '紹介' => '-自己紹介-<br/>',
                '時刻' => "{$today}<br/>",
                '姓' => "$name[0]<br/>",
                '名' => "$name[1]<br/>",
                '歳' => BIRTHDAY . " <br/>",
                '一言' =>"{$sélf_introdúction}</br>",
                '趣味' => "趣味は$hobby[0]と$hobby[1]です。使っている$hobby[0]は" . $detail[0][0] . "と" . $detail[0][1] . "で、好きな作家は" . $detail[1][0] . "と" . $detail[1][1] . "です。<br><br>"
            );

            return $profile;
        }

        $t = Date("Y/m/d/h/i/s");
        $n = array('大住', '遥');
        $s = "初めまして。$n[0]と申します。まだまだ何も出来ませんが頑張っていきたいと思います。";
        $h = array('ギター', '読書');
        $d = array(
            array('Takamine', 'ibanez'),
            array('湊かなえ', '乙一'));
        $profile = set_profiles($t, $n, $s, $h, $d);

        foreach ($profile as $key => $value) {
            echo "{$key}:{$value}";
        }
        

        function show_profiles($profiles) {
            $familyname = '山田';

            $profiles = array(
                array(
                    '紹介' => '-自己紹介-<br/>',
                    '姓' => "$familyname<br/>",
                    '名' => "一郎<br/>",
                    '歳' => "1月1日 <br/>",
                    '一言' => "長男の一郎です。宜しくお願いします。</br>",
                    '趣味' => "将棋<br/><br/>"),
                array(
                    '紹介' => '-自己紹介-<br/>',
                    '姓' => "$familyname<br/>",
                    '名' => "次郎<br/>",
                    '歳' => "2月1日 <br/>",
                    '一言' => "次男の次郎です。宜しくお願いします。</br>",
                    '趣味' => "チェス<br/><br/>"),
                array(
                    '紹介' => '-自己紹介-<br/>',
                    '姓' => "$familyname<br/>",
                    '名' => "三郎<br/>",
                    '歳' => "3月1日 <br/>",
                    '一言' => "三男の三郎です。宜しくお願いします。</br>",
                    '趣味' => "花札<br/><br/>"),
                array(
                    '紹介' => '-自己紹介-<br/>',
                    '姓' => "$familyname<br/>",
                    '名' => "史郎<br/>",
                    '歳' => "4月1日<br/>",
                    '一言' => "四男の史郎です。宜しくお願いします。</br>",
                    '趣味' => "ダーツ<br/><br/>")
            );

            foreach ($profiles as $profile) {
                foreach ($profile as $key => $value) {
                    echo "{$key}:{$value}";
                }
            }
        }

        $pr = show_profiles($profiles);
        echo "$pr";
        