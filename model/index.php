<?php
define("DATABASE_SERVER","localhost");
define("DATABASE_ROOT","root");
define("DATABASE_PASSWORD","");
define("DATABASE_NAME","wedding");
class Model 
{    
    private $_host = DATABASE_SERVER;
    private $_username = DATABASE_ROOT;
    private $_password = DATABASE_PASSWORD;
    private $_database = DATABASE_NAME;

    private $table;
    protected $connexion;
  
    public function __construct($table)
    {
        $this->connexion = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
        if($this->connexion->connect_errno){ die("DATABASE NOT CONNECTED"); }
        $this->table = $table;
        return $this;
    }
    public function is_db_connected() 
    {
        return $this->connexion->connect_errno == 0;
    }
    public function execute($query) 
    {
        return $this->connexion->query($query);
    }
    public function select($selector, $condition = "") 
    {
        return $this->connexion->query("SELECT $selector FROM $this->table $condition");
    }
    public function update($values, $condition) 
    {
        return $this->connexion->query("UPDATE $this->table SET $values WHERE $condition");
    }
    public function insert($values) 
    {
        return $this->connexion->query("INSERT INTO $this->table VALUES ($values)");
    }
    public function delete($condition = "") 
    {
        return $this->connexion->query("DELETE FROM $this->table $condition");
    }

}

$users = new Model("users");
$services = new Model("services");
$places = new Model("places");
$reservations = new Model("reservations");


