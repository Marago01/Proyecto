<?php

namespace App\Libraries;

class Hash
{
    public static function encrypt($password)
    {
        // $encrypte = \Config\Services::encrypter();
        // return bin2hex($encrypte->encrypt($password));
        return password_hash($password, PASSWORD_DEFAULT);
       
    }
     public static function check($userContraseña, $dbUserContraseña)
     {
        
        if (password_verify($userContraseña, $dbUserContraseña))
    {
             return true;

    }

         return false;
        
     }
}
    
