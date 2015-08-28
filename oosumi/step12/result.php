<!DOCTYPE HTML>
<html lang="ja">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="UTF-8">
    </head>
    <body>

        <?php
        //サーバの情報を変数に格納
        $dsn = 'mysql:dbname=profile_db; host=127.0.0.1';
        $usr = 'root';
        $passwod = 'geekjob';

        //サーバ接続処理
        try {
            $db = new PDO($dsn, $usr, $passwod);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->exec('SET NAMES utf8'); //文字コードをUTF-8で取得
            //エラー処理
        } catch (PDOException $e) {
            die("接続エラー：{$e->getMessage()}");
        }

        //クエリ発行
        try {
            //insert命令準備
            $stt = $db->prepare('insert into profile_tbl(name,birthday,self,hobby)VALUES(:name,:birthday,:self,:hobby)');
            //ポストデータの内容セット
            $stt->bindValue(':name', $_POST['name']);
            $stt->bindValue(':birthday', $_POST['birthday']);
            $stt->bindValue(':self', $_POST['self']);
            $stt->bindValue(':hobby', $_POST['hobby']);
            //SQL文実行
            $stt->execute();
            //PDOオブジェクト破棄
            $db = NULL;
            //エラー処理
        } catch (PDOException $e) {
            die("error:{$e->getMessage()}");
        }

        echo('<p>登録しました。</p>');
        ?>
        <br>
        <br>
        <?php
        echo '<a href="/training-php/oosumi/step12/index.php">戻る</a><br>';



        