<?php
require_once 'db/loginDAO.php';

function login($usuario,$senha)
{
    $usuario = consultaLogin($usuario,$senha);
    if(isset($usuario['error']))
        return false;
    return $usuario;
}