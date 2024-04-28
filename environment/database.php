<?php

class Database{
    private $data = [];


    public function __construct(){
        $this->data = [
            ['id' => 1, 'name' => 'item1'],
            ['id' => 2, 'name' => 'item2'],
            ['id' => 3, 'name' => 'item3'],
        ];
    }

    public function getAll(){
        return $this->data;
    }

    public function insert($name){
        $id = count($this->data) + 1;
        $item = ['id' => $id, 'name' => 'name'];
        $this->data[]= $item;
        return $id;
    }

}
$database = new Database();

// ESSE RQ VEM DA REQUISIÇÃO DO JQUERY E É PASSADO UM DADO COMO RQ:'GET'
//AÍ ELE FAZ O CASE PRA VER QUAL FOI REQUISITADO E INSTANCIA A FUNÇÃO A PARTIR DAQUILO


if (isset($_POST['rq'])){
   switch($_POST['rq']){
    case 'get':
        echo json_encode($database->getAll());
    break;
    case 'isrt':
        // Insere um novo item na base de dados
        $itemName = isset($_POST['itemName']) ? $_POST['itemName'] : '';
        if ($itemName) {
            $newItemId = $database->insertItem($itemName);
            echo $newItemId;
        } else {
            echo 'Erro: Nome do item não fornecido.';
        }
        break;
   } 
};
