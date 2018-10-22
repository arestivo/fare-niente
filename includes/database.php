<?php
  /**
   * A singleton representing the app connection 
   * to the database. Use Database::instance() to 
   * access it and db() to get the database connection.
   */
  class Database {
    private static $instance = NULL;
    private $db = NULL;
    
    /**
     * Private constructor. Creates a database connection. 
     * Sets fetch mode to fetch using associative arrays 
     * and turns on exceptions. Also turns on foreign keys
     * enforcement.
     */
    private function __construct() {
      $this->db = new PDO('sqlite:database/fare-niente.db');
      $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->db->query('PRAGMA foreign_keys = ON');
      if (NULL == $this->db) 
        throw new Exception("Failed to open database");
    }

    /**
     * Returns the database connection.
     */
    public function db() {
      return $this->db;
    }

    /**
     * Returns this singleton instance. Creates it if needed.
     */
    static function instance() {
      if (NULL == self::$instance) {
        self::$instance = new Database();
      }
      return self::$instance;
    }
  }

?>