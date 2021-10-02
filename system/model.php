<?php

class Model {
    protected $db;

    public function __construct()
    {
        $this->$db = new PDO('mysql:host=localhost;dbname=scandiweb_test', 'root', '');
        $this->db->
    }

    public function insert ($table, Array $data) {

    }

    public function read () {
        
    }

    public function update () {
        
    }

    public function delete () {
        
    }

}
