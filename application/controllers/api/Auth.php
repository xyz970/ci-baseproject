<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH.'controllers/BaseController.php';

use Firebase\JWT\JWT;

class Auth extends BaseController{

    public function login_post()
    {
        $header = getallheaders();
    }
}