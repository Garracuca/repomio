<?php

namespace App\Models;

// require "../core/Model.php";

use Core\Model;
// get cwd
use PDO;
Use DateTime;
class User extends Model
{
    public function __construct()
    {

    // // Convierte el string a un objeto Date
    // $this->birthdate= date_create($this->birthdate);// Convierte el string a un objeto Date
   
       $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
      
    }
    //@return Array con los datos de los usuarios
    public static function all()
    {
        $dbh = User::db(); // self::db();
        $sql = "SELECT * from users";
        $statement = $dbh->query($sql);
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $users = $statement->fetchAll(PDO::FETCH_CLASS,User::class);
        //$users = $statement->fetchAll(PDO::FETCH_CLASS,"App\\Models\User");
        return $users;
    }

    //@return un usuario en particular
    //@param $id
    public static function find($id)
    {
        // echo "<br> Recupero un usuario";
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
        $db = User::db();
        $stmt = $db->prepare('UPDATE users SET name = :name, surname = :surname, birthdate = :birthdate, email = :email WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':birthdate', $this->birthdate);
        $stmt->bindValue(':email', $this->email);
        return $stmt->execute();
    }
    public function insert()
    {
        $db = User::db();
        $stmt = $db->prepare('INSERT INTO users(name, surname, birthdate, email) VALUES(:name, :surname, :birthdate, :email)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':surname', $this->surname);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':birthdate', $this->birthdate);
        return $stmt->execute();
    }

    
    public function delete()
{
    $db = User::db();
    $stmt = $db->prepare('DELETE FROM users WHERE id = :id');
    $stmt->bindValue(':id', $this->id);
    return $stmt->execute();
}
}