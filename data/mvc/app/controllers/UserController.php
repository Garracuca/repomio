<?php
namespace App\Controllers;
// require "../app/models/User.php";
use App\Models\User;
class UserController{


function __construct(){

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
    public function create()
    {
        require '../views/user/create.php';
    }
    
    public function store()
    {
        $user = new User();
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->insert();
        header("Location:/user");
      }

      public function edit($arguments)
      {
          $id = (int) $arguments[0];
          $user = User::find($id);
          require '../views/user/edit.php';
      }
      
      public function update()
      {
          $id = $_REQUEST['id'];
          $user = User::find($id);// datos del usuario que se mopdificaran
          $user->name = $_REQUEST['name'];
          $user->surname = $_REQUEST['surname'];
          $user->birthdate = $_REQUEST['birthdate'];
          $user->email = $_REQUEST['email'];
          $user->save();// llamo un metodo del modelo
          header('Location:/user');
      }

      public function delete($arguments)
      {
        $id = (int) $arguments[0];
        $user = User::find($id);
        $user->delete(); // metodo del  modelo
        header('Location:/user');
      }

}