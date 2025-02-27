<?php
class Database{
    private static $serverHost="localhost";
    private static $userHost="root";
    private static $password="";
    private static $db="blog";
    private static $connect;
    public static function connect(){
        if(self::$connect){
            return self::$connect;
        }
        else{
            $dsn="mysql:host=".self::$serverHost.";dbname=".self::$db;
            $pdo=self::$connect=new PDO($dsn,self::$userHost,self::$password);
            return $pdo;

        }
    }
}
?>