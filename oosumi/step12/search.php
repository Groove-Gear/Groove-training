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
            echo '接続';
        } catch (PDOException $e) {
            die("接続エラー：{$e->getMessage()}");
        }

        $name = $_POST['name'];

        try {
            $sql = "select * from profile_tbl where name = :name";
            $stt = $db->prepare($sql);
            $stt->bindValue(':name', $name, PDO::PARAM_STR);
            $stt->execute();

            $count = $stt->rowCount();
        } catch (Exception $e) {
            die("接続エラー：{$e->getMessage()}");
        }

        if ($count < 1) {
            echo '検索結果がありません<br>';
        } else {
            ?>
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
        ?>


