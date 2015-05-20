
<?php

require_once('User.php');

class MySQL {

	private $database;
	private $user;
	private $deleteID;

	//発行クエリ文の判定
	private $insert = "insert";
	private $delete = "delete";
	private $select = "select";

	//コンストラクタ
	public function __construct() {
		//mysqlのセットアップ
		$this->setup();
	}

	//insert
	public function insert($user) {
		
		//渡されたUserのデータをデータベースに追加

	}

	//delete
	public function delete($deleteID) {
		
		//渡されたIDのレコードを削除

	}

	//select
	public function select() {

		//データベースから全件取得し、連想配列にして返す

	}

	//クエリの実行
	private function execute($query) {

		//渡されたクエリ文を実行し、実行結果を返す

	}

	//クエリ文の発行
	private function createQuery($queryType) {

		//引数の値別(条件分岐)にクエリ文を発行
		//戻り値はクエリ文(文字列)

	}

	//mysqlのセットアップ
	private function setup() {

		//ここにソースコードを追加

	}

}

?>