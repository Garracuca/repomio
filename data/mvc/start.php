<?php
// // Prueba rápida de recuperación que hicimos en clase
// // include "User.php";
// // echo "<h3> Contenido privado <h3>";
// // echo "<h3> Prueba recuperacion <h3>";

// // var_dump(User::all());
// // var_dump(User::find(3));

// require_once "Controller.php";

// $app = new Controller();
// //http://mvc.local/?method=[index|show]&id=[id_usuario]


// if (isset($_GET['method'])) {
//     $method = $_GET['method'];
// } else {
//     $method = 'index';
// }

// try {
//     if (method_exists($app, $method)) {
//         $app->$method();
//     } else {
//         throw new Exception("No encontrado");
//     }
// } catch (Exception $th) {
//     http_response_code(404);
//     echo "No se ha encontrado el método solictado";
// }


require "core/App.php";
$app = new Core\App(); // crea el enrutador o front controlLer


// require "core/Model.php";// probar el viejo model

// require "app/models/User.php"; // probar el user
// use \App\Models\User;
// $user= new User();
// $user->insert();

// require "app/controllers/UserController.php"; // probamos el userController directamente
// use App\Controllers\UserController;
// $usercontroller= new UserController();
// $usercontroller->index();

