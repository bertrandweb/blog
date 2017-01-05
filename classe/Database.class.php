
<?php


class Database
{

    private $username;
    private $host;
    private $password;
    private $dbname;

    public function __construct($username, $host, $password, $dbname)
    {
        $this -> username = $username;
        $this -> host = $host;
        $this -> password = $password;
        $this -> dbname = $dbname;
    }

    public function Database()
    {
        try {
        $instance = new PDO("mysql:host=" . $this -> host . ";dbname=" . $this -> dbname , $this -> username , $this -> password);
    }
        catch (PDOException $e)
        {
            Log::writeCSV($e -> getMessage());
        }
    }
}
