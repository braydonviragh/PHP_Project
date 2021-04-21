<?php

namespace WebApp2\Database;

class Database {

    private static $user = "bf4b699baa82de";
    private static $pass = "765faf1c";
    private static $dsn ="mysql:host=us-cdbr-east-03.cleardb.com;dbname=heroku_f321750b7faf5a5";
    private static $dbcon;

    private function __construct() {

    }

    //get pdo connection
    public static function getDb(){
        if(!isset(self::$dbcon)) {
            try {
                self::$dbcon = new \PDO(self::$dsn, self::$user, self::$pass);
                self::$dbcon->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$dbcon->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            } catch (\PDOException $e) {
                $msg = $e->getMessage();
                include 'pages/custom-error.php';
                exit();
            }
        }

        return self::$dbcon;
    }

}
