<?php
    class SQLQuery 
    {
        protected $_dbHandle;
        protected $_result;
        
        private $_DBH = null;
		private $_STH = null;
    
        /** Connects to database **/
    
        function connect($dsn, $username, $password)
       	{
       	    try 
			 {
				$this->_DBH = new PDO($dsn, $username, $password);
				$this->_DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->_DBH->setAttribute(PDO::ATTR_PERSISTENT, true);
			 }
	  	    catch(PDOException $e)
			 {
		 	    file_put_contents('../logs/PDOErrors.txt', $e->getMessage(), FILE_APPEND);
			 }
    	}
    
        /** Disconnects from database **/
    
        function disconnect() 
        {
            // Closes the Connection
				$this->DBH = null;
				$this->STH = null;
        }
        
        /** Prepares the query passed as argument **/
        
        function prepareQuery($query)
		{
			if ($this->DBH != null)
			{
				$this->STH = $this->DBH->prepare($query);
			}
			else
			{
				file_put_contents('../logs/PDOErrors.txt', "Error: DataBase Handler is Null...", FILE_APPEND);
			}
		}
        
        function selectAll() 
        {
        	$query = 'select * from `'.$this->_table.'`';
        	return $this->query($query);
        }
        
        function select($id) 
        {
        	$query = 'select * from `'.$this->_table.'` where `id` = \''.mysql_real_escape_string($id).'\'';
        	return $this->query($query, 1);    
        }
    
    	
        /** Custom SQL Query **/
    
    	function query($query, $singleResult = 0) 
        {
    
    		$this->_result = mysql_query($query, $this->_dbHandle);
    
    		if (preg_match("/select/i",$query)) 
            {
        		$result = array();
        		$table = array();
        		$field = array();
        		$tempResults = array();
        		$numOfFields = mysql_num_fields($this->_result);
        		for ($i = 0; $i < $numOfFields; ++$i) 
                {
        		    array_push($table,mysql_field_table($this->_result, $i));
        		    array_push($field,mysql_field_name($this->_result, $i));
        		}
        
        		
       			while ($row = mysql_fetch_row($this->_result)) 
                {
      				for ($i = 0;$i < $numOfFields; ++$i) 
                    {
     					$table[$i] = trim(ucfirst($table[$i]),"s");
     					$tempResults[$table[$i]][$field[$i]] = $row[$i];
      				}
      				if ($singleResult == 1) 
                    {
    		 			mysql_free_result($this->_result);
     					return $tempResults;
      				}
      				array_push($result,$tempResults);
       			}
       			mysql_free_result($this->_result);
       			return($result);
    		}
    		
    
    	}
    
        /** Get number of rows **/
        function getNumRows() 
        {
            return mysql_num_rows($this->_result);
        }
    
        /** Free resources allocated by a query **/
    
        function freeResult() 
        {
            mysql_free_result($this->_result);
        }
    
        /** Get error string **/
    
        function getError() 
        {
            return mysql_error($this->_dbHandle);
        }
    }
?>