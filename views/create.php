<?php
require_once("../database.php");
// POST送信されてきた場合のみ
if(!empty($_POST)) {
    if(empty($_POST["name"])) {
        exit("名前を入力してください");
    }
    if(empty($_POST["email"])) {
        exit("メールアドレスを入力してください");
    }

    $database = new Database();
    $database->store($_POST);

    header("Location: ./index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規作成</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- ヘッダー -->
    <?php include('./header.php'); ?>

    <!-- コンテンツ -->
    <main class="py-5">
        <div class="container">
            <form method="POST" action="">
                <div class="form-group">
                    <label>名前</label>
                    <input type="text" name="name" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="email" name="email" value="" class="form-control">
                </div>
                <a href="./index.php" class="btn btn-primary mt-4 mr-5">一覧に戻る</a>
                <button type="submit" class="btn btn-success mt-4">登録</button>
            </form>
        </div>
    </main>

    <!-- フッター -->
    <?php include('./footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
