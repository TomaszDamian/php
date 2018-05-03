<?php
//namespace App\Core\Database;
class QueryBuilder
{
	protected $pdo;
	
	function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table){
		$statement = $this->pdo->prepare("select * from {$table}");
		
		$statement->execute();
		
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $value){
		$sql = sprintf("INSERT INTO %s(%s) VALUES (%s)",
			$table,
			implode(", ",array_keys($value)),
			":" . implode(', :', array_keys($value))
		);
		try{
			$statement = $this->pdo->prepare($sql);
			die(var_dump($statement));
			$statement->execute($value);
		}
		catch(PDOException $e){
			die($e->getMessage());
		}
	}
	public function update($table, $value, $primaryKey){
		$sql = "UPDATE $table SET $value='array_keys($value)'";
	}
}