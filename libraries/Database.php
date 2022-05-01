<?php
include_once 'settings.php';

/*
    * PDO Database Class
    * Connect to database
    * Create prepared statements
    * Bind values
    * Return rows and results
*/
class Database
{
    private $host = HOST;
    private $user = USERNAME;
    private $pass = PASSWORD;
    private $dbname = DBNAME;

    //Will be the PDO object
    private $dbh; // database handler
    private $stmt; // statement
    private $error;

    public function __construct()
    {
        //Set DSN - data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true, // check existing PDO connection
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // elegant way to handle errors in PDO
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" // et täpitähed ei moonduks
        );

        //Create PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    //Prepare statement with query
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    //Bind values, to prepared statement using named parameters
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    //Execute the prepared statement
    public function execute()
    {
        return $this->stmt->execute();
    }

    //Return multiple records
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }


    //Return a single record
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //Get row count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}