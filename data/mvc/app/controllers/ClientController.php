<?php
namespace App\Controllers;

class   ClientController{


function __construct(){
echo "<br> construyendo  CLIENT controller";
}
    public function index()
    {
      require "../views/client/index.php";
      echo "<br> en el INDEX de client";
    }


    public function show()
    {
        echo "<br> en el SHOW de client";
    }

}