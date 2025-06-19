<?php
require_once '../src/login.php';
function testeLoginTudoCerto()
{
    $username = 'usuario';
    $password = 123456;
    if(!login($username,$password))
        throw new Exception("Erro de autenticaçao Usuario=".$username." Senha=".$password);
    return true;
}
function testeLoginSemUsuario()
{
    $username = '';
    $password = 123456;
    if(login($username,$password))
        throw new Exception("Usuario não informado no processo de login");
    return true;
}
function testeLoginSemSenha()
{
    $username = 'usuario';
    $password = "";
    if(login($username,$password))
        throw new Exception("Senha não informado no processo de login");
    return true;
}
function testeLoginSenhaIncorreta()
{
    $username = 'usuario';
    $password = 1235;
    if(login($username,$password))
        throw new Exception("Usuario ou senha incorretos");
    return true;
}