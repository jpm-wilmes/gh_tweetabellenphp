<?php
/*************************************************************
	Database class
	Learning application for VISTA AO JL2 P5
	Created 2019 by e.steens / j. wilmes
*************************************************************/

abstract class Database {
		// define database access constants (use const to remain inside class scope)
		const DBHOST="localhost"; // hostname (mostly localhost)
		const DBNAME="tweetabellen"; // name of the database
		const DBUSER="tweetabellen"; // name of the database user
		const DBPASS="tweetabellen"; // password of the database user
// DO NOT MODIFY BELOW THIS LINE
		private static function dbConnect() {
            $dbhost		= self::DBHOST;
            $dbname		= self::DBNAME;
            $dbuser		= self::DBUSER;
            $dbpass		= self::DBPASS;
            $conn		= "";                        // connection string
            $pdo		= NULL;                      // handler
            $charset = 'utf8mb4';

            $conn = "mysql:host=" . $dbhost . "; dbname=" . $dbname . ";charset=". $charset;

			$options = [ // define options for PDO connection
				PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,	// give error in case of issue
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,   	// get row indexed by column name
				PDO::ATTR_EMULATE_PREPARES   => false,
			];
			try {
				$pdo = new PDO($conn, $dbuser, $dbpass, $options); // create connection
                return $pdo;
			} // try
			catch (\PDOException $e) {
				throw new \PDOException($e->getMessage(), (int)$e->getCode());
			} // catch

		} //

		public static function getData($p_sSql, $p_aData = "") {
			// execute query on Mysql server
			// $p_sSQL contains MySql query string with parameter ?'s
			// $paData contains array with query parameters
            $pdo = Database::dbConnect();
			$stmt = $pdo->prepare($p_sSql);	// prepare the query
			if(is_array($p_aData)) {		// add the data
				$stmt->execute($p_aData);	// execute the query with data
			} else {
				$stmt->execute();			// execute when no parameters
			}
			
			$result = $stmt->fetchAll(); // get result

			return $result; // dabase query result
		}

		public static function jsonParse($p_sValue) {
			if(is_array($p_sValue)) {
				return json_encode($p_sValue);
			}
			if(is_string($p_sValue)) {
				return json_decode($p_sValue);
			}
		}

	}
