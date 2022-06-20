<?php  
class database{

	//DB Params
	private $dns = "mysql:host=bau6xrvi3ifcj0rborpl-mysql.services.clever-cloud.com;dbname=bau6xrvi3ifcj0rborpl";
	private $username = "ugwquvmwcanovsr9";
	private $password = "KhzEMQeyHZxlPpvTZCal";
	private $conn;

	//DB Connect
	public function connect(){
		$this->conn = null;
		try{
			$this->conn = new PDO($this->dns,$this->username,$this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			echo "Connection failed: ".$e->getMessage();
		}

		return $this->conn;
	}
}
?>

