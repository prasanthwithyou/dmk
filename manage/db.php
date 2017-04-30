<?php 
    class Db {

    protected static $connection;
        // The database connection
       /**
         * Connect to the database
         * 
         * @return bool false on failure / mysqli MySQLi object instance on success
         */
        public function connect() {    
		// Define connection as a static variable, to avoid connecting more than once 
		static $connection;

		// Try and connect to the database, if a connection has not been established yet
		if(!isset($connection)) {
		// Load configuration as an array. Use the actual location of your configuration file
		$config = parse_ini_file('config.ini'); 

		$connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);

		}

		// If connection was not successful, handle the error
		if($connection === false) {

		// Handle error - notify administrator, log to a file, show an error screen, etc.
		return mysqli_connect_error(); 
		}
		return $connection;

        }

        /**
         * Query the database
         *
         * @param $query The query string
         * @return mixed The result of the mysqli::query() function
         */
        public function query($query) {
            // Connect to the database

            $connection = $this -> connect();

            // Query the database
            $result = $connection -> query($query);
            return $result;
        }

        /**
         * Fetch rows from the database (SELECT query)
         *
         * @param $query The query string
         * @return bool False on failure / array Database rows on success
         */
        public function select($query) {
            $resultData = array();

            $result = $this -> query($query);
            if($result === false) {
                return false;
            }
            while ($row = $result -> fetch_assoc()) {
                $resultData[] = $row;
            }
            return $resultData;
        }

        /**
         * Fetch the last error from the database
         * 
         * @return string Database error message
         */
        public function error() {
            $connection = $this -> connect();
            return $connection -> error;
        }

        /**
         * Quote and escape value for use in a database query
         *
         * @param string $value The value to be quoted and escaped
         * @return string The quoted and escaped string
         */
        public function quote($value) {
            $connection = $this -> connect();
            return "'" . $connection -> real_escape_string($value) . "'";
        }
    }


?> 
