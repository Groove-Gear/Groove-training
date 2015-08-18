<!DOCTYPE HTML>
<html lang="ja">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="UTF-8">
    </head>
    <?php
    $bool = TRUE;
    $name = '大住遥';
    $first_name = 'はるか';
    $familyname = 'おおすみ';
    $num = 100;

//if文で名前の表示方法の変更
    if ($flag === TRUE) {
        echo "{$familyname}{$first_name}";
    } else {
        echo "$name";
    }
    ?>

    </br>
    </br>

    <?php
    //if文で$numに格納されている数値を分ける
    //echo $num;
    if ($num === 0) {
        echo "$num";
    } elseif ($num >= 1) {
        if ($num > 10) {
            echo "{$num}は10以上";
        }elseif ($num > 1 && $num < 10) {
            echo "{$num}は1以上10以下";
        }
    } elseif ($num < 1) {
        echo "{$num}は-1以下の数字";
    } else {
        echo "{$num}は数字ではない";
    }
    ?>

   </br>
   </br>
   
   <?php
   //変数に格納されている果物がみかんかりんごかそれ以外なのかを判別
   $fruit = 'みかん';
   
   if ($fruit === 'みかん') {
       echo 'それはみかんです';
   }  elseif ($fruit == 'リンゴ') {
       echo 'それはリンゴです';
   }else{
       echo 'わかりません';
   }
    






