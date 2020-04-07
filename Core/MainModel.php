<?php

class MainModel {

	private $db = null;
	private $stmt;
	private $table;
	private $param;
	private $cols, $columns;
	private $holders, $placehold;
	private $fields, $field;

	public $data;
	public $results;
	public $message;

	public function __construct (\PDO $db) {
	    $this->db = $db;
	}

	// Dynamic insert query function.
	public function insert ($table, array $data, array $columns) {
		// Check if required fields are set.
		if (isset($table) && isset($cols) && isset($holders) {
			$holders = $this->setHolders($columns);
		    $cols = $this->setColumns($columns);

		    // Prepare insert query.
		    $stmt = $this->db->prepare ("INSERT INTO $table ($cols) VALUES ($holders)");
		    
		    // Return data from insert.
		    return $stmt->execute($data);
		} else {
			// Set error message.
			$message = 'not.all.required.fields';
		}
	   
	}

	// Dynamic select query function.
	public function select ($table, array $columns, $field, $param) {
		// Check if required fields are set.
		if (isset($table) && isset($columns) && isset($field) && isset($param) {
		    $cols = $this->setColumns($columns);

		    // Prepare select query.
		    $stmt = $this->db->prepare("SELECT $cols FROM $table WHERE $field = ?");
		    $stmt->execute(array($param));

		    // Return data from select.
		    $result = $stmt->fetch();
		    return json_encode($result);
	    } else {
			// Set error message.
			$message = 'not.all.required.fields';
		}
	}

	// Dynamic update query function.
	public function edit ($table, array $columns, array $data, $param) {
		// Check if required fields are set.
		if (isset($table) && isset($columns) && isset($data) && isset($param) {
		    $fields = $this->setFields($columns);

		    // Prepare update query.
		    $stmt = $this->db->prepare("UPDATE $table SET $fields WHERE $param = ?");

		    // Return data from update.
		    return $stmt->execute($data);
		} else {
			// Set error message.
			$message = 'not.all.required.fields';
		}
	}

	// Dynamic delete query function.
	public function delete ($table, array $data, $param) {
		// Check if required fields are set.
		if (isset($table) && isset($columns) && isset($data) && isset($param) {

			// Prepare delete query.
		    $stmt = $this->db->prepare("DELETE FROM $table WHERE $param = ?");

		    // Return data from delete.
		    return $stmt->execute($data);
	    } else {
			// Set error message.
			$message = 'not.all.required.fields';
		}
	}

	// Private function to set $cols.
	private function setColumns (array $columns) {
	    $cols = implode(', ', array_values($columns));
	    return $cols;
	}

	// Private function to set $fields.
	private function setFields (array $columns) {
	    $fields = implode(' = ?, ', array_values($columns));
	    return $fields.' = ?';
	}

	// Private function to set $holders.
	private function setHolders (array $columns) {
	    $holders = array_fill(1 ,count($columns),'?');
	    return implode(', ',array_values($holders));
	}
};

?>




