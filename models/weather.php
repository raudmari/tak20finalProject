<?php
require_once 'libraries/Database.php';

class Weather
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLastWeatherDataEast()
    {
        $this->db->query('SELECT * FROM ilm_ds18_out_east ORDER BY ID DESC LIMIT 1');
        $results = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $results;
        } else {
            return false;
        }
    }

    public function getLastWeatherDataWest()
    {
        $this->db->query('SELECT * FROM ilm_ds18_out_west ORDER BY ID DESC LIMIT 1');
        $results = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $results;
        } else {
            return false;
        }
    }

    public function getWeastWeatherInfo($year, $month, $day)
    {
        $this->db->query("SELECT *, 
        EXTRACT(YEAR FROM added) AS Year,
        EXTRACT(MONTH FROM added) AS Month,
        EXTRACT(DAY FROM added) AS Day,
        EXTRACT(HOUR FROM added) AS Hour,
        EXTRACT(MINUTE FROM added) AS Minute
        FROM ilm_ds18_out_west
        WHERE EXTRACT(HOUR FROM added) IN('06','07','08','09','12','13','14','15','19','20','21','22') 
        and EXTRACT(MINUTE from added) in('0','1','2','3','4') 
        and EXTRACT(YEAR from added) <= :year 
        and EXTRACT(MONTH from added) = :month
        and EXTRACT(DAY from added) = :day  
        ORDER BY added");
        $this->db->bind(':year', $year);
        $this->db->bind(':month', $month);
        $this->db->bind(':day', $day);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getEastWeatherInfo($year, $month, $day)
    {
        $this->db->query("SELECT *, 
        EXTRACT(YEAR FROM added) AS Year,
        EXTRACT(MONTH FROM added) AS Month,
        EXTRACT(DAY FROM added) AS Day,
        EXTRACT(HOUR FROM added) AS Hour,
        EXTRACT(MINUTE FROM added) AS Minute
        FROM ilm_ds18_out_west
        WHERE EXTRACT(HOUR FROM added) IN('06','07','08','09','12','13','14','15','19','20','21','22') 
        and EXTRACT(MINUTE from added) in('0','1','2','3','4') 
        and EXTRACT(YEAR from added) <= :year 
        and EXTRACT(MONTH from added) = :month
        and EXTRACT(DAY from added) = :day  
        ORDER BY added");
        $this->db->bind(':year', $year);
        $this->db->bind(':month', $month);
        $this->db->bind(':day', $day);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}