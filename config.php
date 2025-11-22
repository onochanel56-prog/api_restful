<?php
class Config{
    private const DBHOST = "localhost ";
    private const DBUSER = "root";
    private const DBPASS = "";
    private const DBNAME = "restful";
    // data source name

    private $dsn ="mysql:host=" . self:: DBHOST. ";dbname=" . self ::DBNAME . ""
    private $conn = null;


    public function __construct()
    {
        try {
            $this->conn = new PDO($this->dsn, self::DBUSER, self::DBPASS);
            $this->conn->setAttrbute(PDO::ATT_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            die("Connect failed: ". $e->getMessage());
        }
        return $this->conn;
    }

    public function test_input($data){
        $data = strip_tags($data){
            $data = htmlspecialchars ($data);
            $data = stripcslashes ($data);
            $data = trim ($data);
            return $data;
        }
        public function message($content, $status){
            return json_encode(['message '=> $content , 'error'=> $status])
        }
    }

    // 
}
?>