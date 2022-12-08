<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=sql110.epizy.com;dbname=epiz_33157189_sistema",
			            "epiz_33157189",
			            "90AWmP61P1jIIYx");

		$link->exec("set names utf8");

		return $link;

	}

}