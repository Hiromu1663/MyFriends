<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>友達一覧</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- ヘッダー -->
    <?php include('./header.php'); ?>

    <!-- コンテンツ -->
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="./create.php" class="btn btn-primary">新規登録</a>
                </div>
            </div>
            <table class="table table-striped my-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>名前</th>
                        <th colspan="3">メールアドレス</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>田中</td>
                        <td>test@gmail.com</td>
                        <td><a href="./edit.php?id=1" class="btn btn-warning btn-sm">編集</a></td>
                        <td><a href="./index.php?id=1" class="btn btn-danger btn-sm">削除</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>山田</td>
                        <td>example@gmail.com</td>
                        <td><a href="./edit.php?id=2" class="btn btn-warning btn-sm">編集</a></td>
                        <td><a href="./index.php?id=2" class="btn btn-danger btn-sm">削除</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- フッター -->
    <?php include('./footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
