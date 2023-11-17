<?php
namespace App\Models;
require "../core/Model.php";
use Core\Model;
// get cwd
class User extends Model{


 //@return Array con los datos de los usuarios
 public static function all()
 {
//     $dbh= User::db();// self::db();
//     $sql= "SELECT * from users";
//    $statement= $dbh->query($sql);

 } 

 //@return un usuario en particular
 //@param $id
 public static function find($id)
 {
    echo "<br> Recupero un usuario";
     //return User::USERS[$id-1];
    //  foreach (User::USERS as $key => $user) {
    //      if ($user[0] == $id) {
    //          return $user;
    //      }
    //  }
    //  return null;
}//find
    public function save(){
        echo "<br> actualizar un registro";
    }
    public function insert(){
        echo "<br> creo un registro";
    }
 
    public function delete(){
        echo "<br> borro un registro";
    }
 
 
}
