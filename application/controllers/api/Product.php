<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH.'controllers/BaseController.php';
class Product extends BaseController{
    public function index_get()
    {
        $this->successResponse("","Halooo");
    }

}