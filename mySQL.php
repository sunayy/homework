
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

		$users = [];
		//データベースから全件取得
		$query = $this->createQuery($this->select);
		$result = $this->execute();
		while ($row = mysql_fetch_assoc($result)) {
			//$resultで取得したレコードを一つずつ$rowとして取り出し取り出し取り出す

			//nameカラムは"name"、IDカラムは"ID"、ageカラムは"age"をそれぞれ連想配列のキーとする
			$user = [
				//連想配列を作成
			]
			
			//作成した連想配列をusers配列に追加する
		}

		return $users;
	}

	//クエリの実行
	private function execute($query) {

		//渡されたクエリ文を実行し、実行結果を返す

	}

	//クエリ文の発行
	private function createQuery($queryType) {

		//引数の値別(条件分岐)にクエリ文を発行
		//""内で変数を参照する時はドットで連結する&要素は'''で囲むことを忘れずに
		//例："INSERT ... VALUES('".$this->user->name."'...)"

		//戻り値はクエリ文(文字列)

	}

	//mysqlのセットアップ
	private function setup() {

		//ここにソースコードを追加

	}

}

?>