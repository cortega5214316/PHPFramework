<?php

	// DataBase Class to access the DB
	//
	// To use the Class Properly you can follow the next example
	//
	// Example:
	//
	// Create an Instance of the Class
	//
	//		$database = new DataBase();
	//
	//		Next we need to write our insert query. Notice we are using placeholders 
	//		instead of the actual data parameters.
	//
	//		$database->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');
	//
	//		We yhern need to bind the data to the above Parameter's placeholders
	//
	//		$database->bind(':fname', 'John');
	//		$database->bind(':lname', 'Smith');
	//		$database->bind(':age', '24');
	//		$database->bind(':gender', 'male');
	//
	//		We then finally execute the query
	//
	// 		$database->execute();
	//
	//		To run several queries we can use the Transaction so we don't need to run a query every time.
	//
	//		$database->beginTransaction();
	//
	//		$database->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');
	//
	//		$database->bind(':fname', 'Jenny');
	//		$database->bind(':lname', 'Smith');
	//		$database->bind(':age', '23');
	//		$database->bind(':gender', 'female');
	//
	// 		$database->execute();
	//
	//		$database->bind(':fname', 'Jilly');
	//		$database->bind(':lname', 'Smith');
	//		$database->bind(':age', '20');
	//		$database->bind(':gender', 'female');
	//
	// 		$database->execute();
	//
	//		$database->endTransaction();
	//
	//	To get a single Record
	//
	//		$database->query('SELECT FName, LName, Age, Gender FROM mytable WHERE FName = :fname');
	//
	//		$database->bind(':fname', 'Jenny');
	//
	//		$row = $database->single();
	//
	//	To get Multiple Records row
	//
	//		$database->query('SELECT FName, LName, Age, Gender FROM mytable WHERE LName = :lname');
	//
	//		$database->bind(':lname', 'Smith');
	//
	//		$rows = $database->resultset();
	//
	
	
	
	require_once("config.php");

	final class DataBase
	{
	
		private $host = DB_HOST;
		private $name = DB_NAME;
		private $user = DB_USERNAME;
		private $password = DB_PASSWORD;
		
		private $dsn = null;
		
		private $db_hdl = null;
		private $stm_hdl = null;
		
		private $error;
		
		public function __construct($db_host, $db_name, $usr, $pass)
		{
			$this->host = $db_host;
			$this->name = $db_name;
			$this->user = $usr;
			$this->pass = $pass;
			// Sets the DSN
			// "mysql:host=DB_HOST; dbname=DB_NAME"
			
			$this->dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->name;
			
			try 
				{
					$this->db_hdl = new PDO($this->dsn, $this->user, $this->password);
					$this->db_hdl->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		public function __construct()
		{
			// Sets the DSN
			// "mysql:host=DB_HOST; dbname=DB_NAME"
			
			$this->dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->name;
			
			try 
				{
					$this->db_hdl = new PDO($this->dsn, $this->user, $this->password);
					$this->db_hdl->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
			
		}
		
		public function Query($query)
		{
			try
				{
					$this->stm_hdl = $this->db_hdl->prepare($query);
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		// The next method we will be looking at is the bind method. In order to prepare our SQL queries, 
		// we need to bind the inputs with the placeholders we put in place. This is what the Bind method is used for.
		//
		// Param is the placeholder value that we will be using in our SQL statement, example :name.

		// Value is the actual value that we want to bind to the placeholder, example “John Smith”.

		// Type is the datatype of the parameter, example string.

		// The main part of this method is based upon the PDOStatement::bindValue PDO method.
		public function Bind($param, $value, $type = null)
		{
			if(is_null($type))
			{
				switch(true)
				{
					case is_int($value)
						$type = PDO::PARAM_INT;
						break;
					case is_bool($value)
						$type = PDO::PARAM_BOOL;
						break;
					case is_null($value)
						$type = PDO::PARAM_NULL;
						break;
					default:
						$type = PDO::PARAM_STR;
						break;
				}
			}
			try
				{
					if (!is_null($this->stm_hdl))
						$this->stm_hdl->bindValue($param, $value, $type);
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		// The next method we will be look at is the PDOStatement::execute. 
		// The execute method executes the prepared statement.
		public function Execute()
		{
			try
				{
					
					return $this->stm_hdl->execute();
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		// The Result Set function returns an array of the result set rows. 
		// It uses the PDOStatement::fetchAll PDO method. First we run the execute method, then we return the results.
		public function GetAllRecords()
		{
			try
				{
					
					$this->execute();
					return $this->stm_hdl->fetchAll(PDO::FETCH_ASSOC);
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		// Very similar to the previous method, the Single method simply returns a single record from the database. 
		// Again, first we run the execute method, then we return the single result. 
		// This method uses the PDO method PDOStatement::fetch.
		public function GetSingleRecord()
		{
			try
				{
					
					$this->execute();
					return $this->stm_hdl->fetch(PDO::FETCH_ASSOC);
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		// The next method simply returns the number of effected rows from the previous delete, 
		// update or insert statement. This method use the PDO method PDOStatement::rowCount.
		public function RecordsCount()
		{
			try
				{
					
					return $this->stm_hdl->rowCount();
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		// The Last Insert Id method returns the last inserted Id as a string. 
		// This method uses the PDO method PDO::lastInsertId.
		public function LastInsertId()
		{
			try
				{
					
					return $this->db_hdl->lastInsertId();
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		// Transactions allows you to run multiple changes to a database all in one batch to ensure that your work 
		// will not be accessed incorrectly or there will be no outside interferences before you are finished. 
		// If you are running many queries that all rely upon each other, if one fails an exception will be thrown 
		// and you can roll back any previous changes to the start of the transaction.

		// For example, say you wanted to enter a new user into your system. The create new user insert worked, 
		// but then you had to create the user configuration details in a separate statement. If the second statement fails, 
		// you could then roll back to the beginning of the transaction.

		// Transactions also prevent anyone accessing your database from seeing inconsistent data. 
		// For example, say we created the user but someone accessed that data before the user configuration was set. 
		// The accessing user would see incorrect data (a user without configuration) which could potentially expose our system to errors.
		public function BeginTransaction()
		{
			try
				{
					
					return $this->db_hdl->beginTransaction();
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		// To end a transaction and commit your changes:
		public function EndTransaction()
		{
			try
				{
					
					return $this->db_hdl->commit();
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		// To cancel a transaction and roll back your changes:
		public function CancelTransaction()
		{
			try
				{
					
					return $this->db_hdl->rollBack();
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		// The Debut Dump Parameters methods dumps the the information that was contained in the Prepared Statement. 
		// This method uses the PDOStatement::debugDumpParams PDO Method.
		public function DebugDumpParams()
		{
			try
				{
					
					return $this->db_hdl->debugDumpParams();
				}
			catch(PDOException $e)
				{
					$this->error = $e->getMessage();
				 	file_put_contents('../logs/PDOErrors.txt', $this->error, FILE_APPEND);
				}
		}
		
		public function __destruct()
			{
				// Closes the Connection
				$this->db_hdl = null;
				$this->stm_hdl = null;
				
				$this->error = null;
				$this->host = null;
				$this->name = null;
				$this->user = null;
				$this->pass = null;
				
				$this->dsn = null;
			}
	}

?>
