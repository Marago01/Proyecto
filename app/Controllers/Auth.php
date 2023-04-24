<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\UserModel;



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
        $password =(string) $this->request->getPost('password');
        $cpassword = $this->request->getPost('cpassword');

        $data = [

            'nombre' => $nombre,
            'apellido' => $apellido,
            'correo' => $correo,
            'usuario' => $usuario,
            'password' => $password
            //'password' => Hash::encrypt($password)
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
          $usuario =$this->request->getPost('usuario');
          $password =(string)$this->request->getPost('password');

          $userModel = new UserModel();
          
    
          $userInfo = $userModel->where('usuario',$usuario)->first();
          //print_r($userInfo);
          
    //    $encriptador = \Config\Services::encrypter();
    //    $verificacion= $encriptador->decrypt(hex2bin($userInfo['password']));
    //       if($password==$verificacion){
    //         return redirect()->to('/tablero');
    //       }
         //$verificacion = password_verify($password, $userInfo['password']);
         
           if ($password==$userInfo['password']){
            $userId = $userInfo['id'];

             session()->set('loggedInUser', $userId);
              return redirect()->to('/tablero');
              
            } 
           else{
        
          
              session()->setFlashdata('fail', 'contraseña incorrecta, intenta de nuevo');
               
              return redirect()->to('auth');
          
           }

     
    }
}
