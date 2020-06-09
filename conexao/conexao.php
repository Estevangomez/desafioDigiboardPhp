<?php 

/**
 * 
 */
class Conexao 
{
	private static $instance;
	public static function getConn(){
		if(!isset(self::$instance)):
			self::$instance = new PDO('mysql:host=127.0.0.1;dbname=digiboard;','root','');
		endif;

			return self::$instance;
	}
}







?>