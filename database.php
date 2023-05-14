<?php
class Database {

  // データベースに接続
  function connect() {
    $dsn = "mysql:dbname=myfriends;host=localhost";
    $user = "root";
    $password = "";
    
  try {
    $dbh = new \PDO($dsn, $user, $password);
    $dbh->query("SET NAMES UTF8MB4");
    return $dbh;
  } catch(Exception $e) {
    exit($e->getMessage());
  }
  }

  // データベースに保存
  function store($input) {
    $dbh = $this->connect();
    $stmt = $dbh->prepare("INSERT INTO users SET name = ?, email = ?");
    $stmt->execute([$input["name"], $input["email"]]);
  }

// 友達全員取得
function all() {
  $dbh = $this->connect();
  $stmt = $dbh->prepare("SELECT*FROM users");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// 友達１人を取得
function find($id) {
  $dbh = $this->connect();
  $stmt = $dbh->prepare("SELECT*FROM users WHERE id = ?");
  $stmt->execute([$id]);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}

?>
