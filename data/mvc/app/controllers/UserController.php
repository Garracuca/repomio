<?php
namespace App\Controllers;
require "../app/models/User.php";
use App\Models\User;
class UserController{


function __construct(){
echo "<br> construyendo USER controller";

}
    public function index()
    {

      $users= User::all();
      // print_r($users);
      // die();
      require "../views/user/index.php";
  
    }


    public function show($args)
    {
      $id= (int) $args[0];
      $user= User::find($id);
      require "../views/user/show.php";
      
    }
     function create(){
      require "../views/user/create.php";
     }




}