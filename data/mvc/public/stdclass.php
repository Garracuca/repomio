<?php
class PageShow{
    public $currentpage;
    public function __construct($objpage)
    {
        $this->currentpage= $objpage;
    }

    public function show(){
echo "<br> el nombre de la pagina actual es: ".$this->currentpage->status;
$status= $this->currentpage->status ? "Activo": "deshabilitado" ;
echo "<br> Estado de la pagina: " .$status;

    }
}

$page= new stdClass();
$page->name="Indice";
$page->status=1;
// añadir metodos dinamicos a stdclass mediante las funciones callback
$page->print= function($test){
    return "Imprimiendo el texto: " . $test;
};

$pageview = new PageShow($page);

$pageview->show();


$printing= $page->print;
echo "<br>" . $printing("Hola Mundo");

?>