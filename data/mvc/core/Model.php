<?php
namespace Core;
require "../config/db.php";
use const DSN;
use const USUARIO;
use const PASSWORD;
use PDO;
use PDOException;
// TAMBIÉN PODRÍA PONER UNA CONTRABARRA DELANTE EN VEZ DE USAR "USE"
// esto ocurre por usar la última versión de PHP y las propiedades dinamicas
#[\AllowDynamicProperties]
class Model
{

    static function db()
    {
    
        try {
            $dbh = new PDO(DSN, USUARIO, PASSWORD);
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //echo "<br> CONEXION CORRECTA";
        } catch (PDOException $ex) {
            echo "Fallo en la conexion : " . $ex->getMessage();
        }
        return $dbh;
    } //fin_db
}
