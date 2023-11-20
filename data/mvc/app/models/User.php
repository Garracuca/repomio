<?php

namespace App\Models;

require "../core/Model.php";

use Core\Model;
// get cwd
use PDO;
Use DateTime;
class User extends Model
{
    public function __construct()
    {
        $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
    }

    //@return Array con los datos de los usuarios
    public static function all()
    {
        $dbh = User::db(); // self::db();
        $sql = "SELECT * from users";
        $statement = $dbh->query($sql);
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $users = $statement->fetchAll(PDO::FETCH_CLASS);
        return $users;
    }

    //@return un usuario en particular
    //@param $id
    public static function find($id)
    {
        echo "<br> Recupero un usuario";
        // $dbh= Self::db();
        $dbh = User::db();
        $sql = "SELECT * from users where id= :id";
        $statement = $dbh->prepare($sql);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $statement->fetch(PDO::FETCH_CLASS);
        return $user;
        //return User::USERS[$id-1];
        //  foreach (User::USERS as $key => $user) {
        //      if ($user[0] == $id) {
        //          return $user;
        //      }
        //  }
        //  return null;
    } //find
    public function save()
    {
        echo "<br> actualizar un registro";
    }
    public function insert()
    {
        echo "<br> creo un registro";
    }

    public function delete()
    {
        echo "<br> borro un registro";
    }
}
