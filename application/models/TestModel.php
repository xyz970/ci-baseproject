<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'BaseModel.php';
class TestModel extends BaseModel{
    protected $table_name = "test";
    function __construct()
    {
        parent::__construct();
    }

    // public function get()
    // {
    //     return $this->getData();
    // }

    // public function getSpec($field)
    // {
    //     return $this->getSpecifiedData($field);
    // }


    
}