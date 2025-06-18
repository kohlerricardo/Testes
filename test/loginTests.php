<?php
require_once '../src/login.php';
function testeLoginTudoCerto()
{
    $username = 'ricardo';
    $password = sha1(123456);
    if(!login($username,$password))
        return false;
    return true;
}
function testeLoginSemUsuario()
{
    $username = '';
    $password = sha1(123456);
    if(!login($username,$password))
        throw new Exception("Usuario não informado no processo de login");
    return false;
}
function testeLoginSemSenha()
{
    
}
function testeLoginSenhaIncorreta()
{
    
}