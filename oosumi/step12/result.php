<!DOCTYPE HTML>
<html lang="ja">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="UTF-8">
    </head>
    <body>

        <?php
        $dsn = 'mysql:dbname=profile_db; host=127.0.0.1';
        $usr = 'root';
        $passwod = 'geekjob';

        try {
            $db = new PDO($dsn, $usr, $passwod);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->exec('SET NAMES utf8');
        } catch (PDOException $e) {
            die("接続エラー：{$e->getMessage()}");
        }

        try {

            $stt = $db->prepare('insert into profile_tbl(name,birthday,self,hobby)VALUES(:name,:birthday,:self,:hobby)');

            $stt->bindValue(':name', $_POST['name']);
            $stt->bindValue(':birthday', $_POST['birthday']);
            $stt->bindValue(':self', $_POST['self']);
            $stt->bindValue(':hobby', $_POST['hobby']);

            $stt->execute();
            $db = NULL;
        } catch (PDOException $e) {
            die("error:{$e->getMessage()}");
        }

        echo('<p>登録しました。</p>');
        
        ?>

        <a href="index1.php">戻る</a>



