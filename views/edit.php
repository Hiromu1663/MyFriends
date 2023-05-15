<?php
require_once("../database.php");

if(!empty($_POST)) {
    $input = $_POST;
    $input["id"] = $_GET["id"];

        if(empty($input["name"])) {
            exit("名前を入力してください");
        }
        if(empty($input["email"])) {
            exit("メールアドレスを入力してください"); 
        }     
        $database = new Database();
        $database->update($input);

        header("Location: ./index.php");
}

$database = new Database();
$friend = $database->find((int)$_GET["id"]);
var_dump($friend);

if (empty($friend)) {
    header("Location: ./index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>友達編集</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">

   
    <?php include('./header.php'); ?>

   
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="./index.php" class="btn btn-primary">一覧に戻る</a>
                </div>
            </div>
            <form method="POST" action="">
                <table class="table table-striped my-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>名前</th>
                            <th colspan="2">メールアドレス</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $friend[0]["id"]; ?></td>
                            <td><input type="text" name="name" value="<?php echo $friend[0]["name"]; ?>"></td>
                            <td><input type="text" name="email" value="<?php echo $friend[0]["email"]; ?>"></td>
                            <td><button type="submit" class="btn btn-success btn-sm">更新</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </main>

    
    <?php include('./footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
