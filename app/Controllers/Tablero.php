<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Tablero extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $loggedInUser = session()->get('loggedInUser');
       $informacion = $userModel->find($loggedInUser);

       $data = [
        ''
       ];

        return view('tablero/index');
    }
}
