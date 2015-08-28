<!DOCTYPE HTML>
<html lang="ja">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta charset="UTF-8">
    </head>
    <body>

        <p>プロフィール検索</p>

        <!-- postを使いsearch.phpに入力情報を渡す -->
        <form  method="POST" action = "search.php">
            名前：
            <input type="text" name="name" size="15" />
            <input type="submit" name="search" value="検索" />
        </form>


    </body>
</html>

