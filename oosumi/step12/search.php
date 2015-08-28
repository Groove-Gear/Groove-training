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
            echo '接続';
            //エラー処理
        } catch (PDOException $e) {
            die("接続エラー：{$e->getMessage()}");
        }

        //変数にポストで受け取ったデータを格納
        $name = $_POST['name'];

        //クエリ発行
        try {
            //select文で検索条件を指定
            $sql = "select * from profile_tbl where name = :name";
            //SQL文実行準備
            $stt = $db->prepare($sql);
            //ポストデータの内容セット
            $stt->bindValue(':name', $name, PDO::PARAM_STR);
            //SQL文実行
            $stt->execute();
            //処理した結果を返す
            $count = $stt->rowCount();
            //エラー処理
        } catch (Exception $e) {
            die("接続エラー：{$e->getMessage()}");
        }


        if ($count < 1) {
            //検索結果が0件なら実行
            echo '検索結果がありません<br>';
        } else {
            ?>
            <!-- 一致する検索結果があれば実行 -->
            <table width="400" border="1" cellspacing="0" cellpadding="8">
                <tbody>
                    <tr>
                        <th>
                            名前
                        </th>
                        <th>
                            生年月日
                        </th>
                        <th>
                            一言
                        </th>
                        <th>
                            趣味
                        </th>
                    </tr>
                    <?php
                    //検索件数だけ行を表示
                    while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
                        ?>

                        <tr>
                            <td align="center"><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['birthday']) ?></td>
                            <td><?= htmlspecialchars($row['self']) ?></td>
                            <td align="center"><?= htmlspecialchars($row['hobby']) ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }

        //PDOオブジェクト破棄
        $db = NULL;

        echo '<a href="/training-php/oosumi/step12/index.php">戻る</a><br>';
        ?>


