<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=reservas_de_aulas;charset=utf8','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        return $pdo;
    }
    
}
$pdo = new PDO('mysql:host=localhost;dbname=reservas_de_aulas;charset=utf8','root','');