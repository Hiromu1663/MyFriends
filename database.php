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
}

?>
