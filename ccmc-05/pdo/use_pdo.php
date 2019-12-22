<?php
// データベース接続情報
$dsn = "mysql:host=localhost;dbname=reviewdb";
$user = "reviewdb_admin";
$password = "admin123";

// データベースに接続
$pdo = null;
try {
	// データベース接続オブジェクトを取得
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
	// PDOの呼び出し
	$pdo = new PDO(DB_URL, DB_USER, DB_PASSWORD, $options);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>