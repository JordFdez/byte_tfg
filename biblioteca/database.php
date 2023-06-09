<?php
class Database
{
	private static $dbName = 'byte' ;
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'root';
	private static $dbUserPassword = 'rootroot';

	private static $cont  = null;

	public function __construct() {
		exit('Init function is not allowed');
	}

	public static function connect()//conectar a la base de datos
	{
       if ( null == self::$cont )
       {
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
        }
        catch(PDOException $e)
        {
          die($e->getMessage());
        }
       }
       return self::$cont;
	}

	public static function disconnect()//desconectar de la base de taods
	{
		self::$cont = null;
	}
}
?>
