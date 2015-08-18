<!DOCTYPE HTML>
<html lang="ja">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="UTF-8">
    </head>
    <?php
 //if文で星座の判定
    $birthmonth = 4;
    $day = 10;
    
    if( $birthmonth == 4){
        if($day>=1 && $day<=20){
            echo '私は4月生まれの牡羊座です。';
        }elseif($day>=21 && $day<=30) {
            echo '私は4月生まれの牡牛座です。';
        }else {
        echo '入力ミスです。'; 
        }
            
    }elseif ($birthmonth == 5) {
        if($day>=1 && $day<=20){
            echo '私は5月生まれの牡牛座です。';
        }elseif ($day>=21 && $day<=31) {
            echo '私は5月生まれの双子座です。';
        }else {
        echo '入力ミスです。'; 
        }
        
    }elseif ($birthmonth == 6) {
        if ($day>=1 && $day<=21){
            echo '私は6月生まれの双子座です';
        }elseif ($day>=22 && $day<=30) {
            echo '私は6月生まれの蟹座です。'; 
        }else {
        echo '入力ミスです。'; 
        }
        
    }elseif ($birthmonth == 7) {
        if($day>=1 && $day<=23){
            echo '私は7月生まれの蟹座です。';
        }elseif ($day>=24 && $day<=31) {
            echo '私は7月生まれの獅子座です。';
        }else {
        echo '入力ミスです。'; 
        }
        
    }elseif ($birthmonth == 8) {
        if ($day>= 1 && $day <= 23){
            echo '私は8月生まれの獅子座です。';
        }elseif ($day>=24 && $day<=31) {
            echo '私は8月生まれの乙女座です。';
        }else {
        echo '入力ミスです。'; 
        }
        
    }elseif ($birthmonth == 9) {
        if ($day>=1 && $day<=23){
            echo '私は9月生まれの乙女座です。';
        }elseif ($day>=24 && $day<=30) {
            echo '私は9月生まれの天秤座です。';   
        }else {
        echo '入力ミスです。'; 
        }
        
    }elseif ($birthmonth == 10) {
        if ($day>=1 && $day<=23){
            echo '私は10月生まれの天秤座です。';
        }elseif ($day>=24 && $day<=31) {
            echo '私は10月生まれの蠍座です。';
        }else {
        echo '入力ミスです。'; 
        }
        
    }elseif ($birthmonth == 11) {
        if ($day>=1 && $day<=22){
            echo '私は11月生まれの蠍座です。';
        }elseif ($day>=23 && 30) {
            echo '私は11月生まれの射手座です。';
        }else {
        echo '入力ミスです。'; 
        }
        
    }elseif ($birthmonth == 12) {
        if ($day>=1 && $day<=22){
            echo '私は12月生まれの射手座です。';
        }elseif ($day>=23 && $day<=31) {
            echo '私は12月生まれの山羊座です。';
        }else {
        echo '入力ミスです。'; 
        }
    
    }elseif ($birthmonth == 1) {
        if ($day>=1 && $day<=20){
            echo '私は1月生まれの山羊座です。';
        }elseif ($day>=21 && $day<=31) {
            echo '私は1月生まれの水瓶座です。';
        }else {
        echo '入力ミスです。'; 
        }
        
    }elseif ($birthmonth == 2) {
        if ($day>=1 && $day<=19){
            echo '私は2月生まれの水瓶座です。';
        }elseif ($day>=20 && $day<=28) {
            echo '私は2月生まれの魚座です。';
        }else {
        echo '入力ミスです。'; 
        }
        
    }elseif ($birthmonth == 3) {
        if ($day>=1 && $day<=20){
            echo '私は3月生まれの魚座です。';
        }elseif ($day>=21 && $day<=31) {
            echo '私は3月生まれの牡羊座です。';
        }else {
        echo '入力ミスです。'; 
        }
        
    }  else {
        echo '入力ミスです。'; 
    }
    ?>
    <br>
    <br>
    <?php
    //switch文で干支の判別
    $ad = 1989%12;
    
    switch ($ad) {
    case 0;
        echo '私は申年です。';
        break;
    case 1:
        echo '私は酉年です。';
        break;
    case 2:
        echo '私は戌年です。';
        break;
    case 3:
        echo '私は亥年です。';
        break;
    case 4:
        echo '私は子年です。';
        break;
    case 5;
        echo '私は丑年です。';
        break;
    case 6;
        echo '私は寅年です。';
        break;
    case 7;
        echo '私は卯年です。';
        break;
    case 8;
        echo '私は辰年です。';
        break;
    case 9;
        echo '私は巳年です。';
        break;
    case 10;
        echo '私は午年です。';
        break;
    case 11;
        echo '私は未年です。';
        break;
    }
    ?>
    <br>
    <br>
    <?php
    //if文で干支の判別
    if ($ad === 0){
        echo '私は申年です。';
    }elseif ($ad === 1) {
        echo '私は酉年です。';
    }elseif ($ad === 2) {
        echo '私は戌年です。';
    }elseif ($ad === 3) {
        echo '私は亥年です。';
    }elseif ($ad === 4) {
        echo '私は子年です。';
    }elseif ($ad === 5) {
        echo '私は丑年です。';
    }elseif ($ad === 6) {
        echo '私は寅年です。';
    }elseif ($ad === 7) {
        echo '私は卯年です。';
    }elseif ($ad === 8) {
        echo '私は辰年です。';
    }elseif ($ad === 9) {
        echo '私は巳年です。';
    }elseif ($ad === 10) {
        echo '私は午年です。';   
    }elseif ($ad === 11) {
        echo '私は未年です。';
    }
        
    
   
    
    