<?php
  $conexion=new mysqli("localhost", "root", "", "reservas_de_aulas");
	try{

		$base=new PDO("mysql:host=localhost; dbname=reservas_de_aulas" , "root" , "");

		$base->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("set character set utf8");

	}catch(exception $e) {

        die("Error:" . $e->getmessage());
        echo "linea del error" . $e->getline();

    }
?>