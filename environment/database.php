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

if (isset($_POST['rq'])){
   switch($_POST['rq']){
    case 'get':
    echo json_encode($database->getAll());
    break;
   } 
};
