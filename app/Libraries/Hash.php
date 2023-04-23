<?php

namespace App\Libraries;

class Hash
{
    public static function encrypt($contraseña)
    {
        return password_hash($contraseña, PASSWORD_BCRYPT);
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