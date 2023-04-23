<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\UserModel;
use App\Models\Usuarios;


class Auth extends BaseController
{

    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {
        return view('auth/login');
    }

    public function registrar()
    {
        return view('auth/registrar');
    }

    public function registrarUsuario()
    {
     
        $nombre = $this->request->getPost('nombre');
        $apellido = $this->request->getPost('apellido');
        $correo = $this->request->getPost('correo');
        $usuario = $this->request->getPost('usuario');
        $contraseña = $this->request->getPost('contraseña');
        $ccontraseña = $this->request->getPost('ccontraseña');

        $data = [

            'nombre' => $nombre,
            'apellido' => $apellido,
            'correo' => $correo,
            'usuario' => $usuario,
            'contraseña' => Hash::encrypt($contraseña)
        ];

        $userModel = new \App\Models\UserModel();
        $query = $userModel->insert($data);

        if (!$query)
        {
            return redirect()->back()->with('fail','No se agrego');
        }else{
            return redirect()->back()->with('success','Agregado con exito!');
        }
    }

    public function loginUser()
    {
          $usuario = $this->request->getPost('usuario');
          $contraseña =$this->request->getPost('contraseña');

          $userModel = new UserModel();
          $userInfo = $userModel->where('usuario', $usuario)->first();

          $verificacion = Hash::check($contraseña, $userInfo['contraseña']);
           if (!$verificacion){
          
               session()->setFlashdata('fail', 'Contraseña incorrecta, intenta de nuevo');
            
              return redirect()->to('auth');
           } 
           else{
        
            $userId = $userInfo['id'];

             session()->set('loggedInUser', $userId);
              return redirect()->to('/tablero');
          
           }

     
    }
}
