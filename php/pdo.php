<?php 
	class DbConnect {
		private $host 	= 'mydb';
		private $dbName = 'student';
		private $user 	= 'root';
		private $pass 	= 'wifi123#';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
                echo "conected";
			} catch( PDOException $e) {
                echo 'Database Error: ' . $e->getMessage();
                echo "fatal error";
			}
		}
	}
 ?>