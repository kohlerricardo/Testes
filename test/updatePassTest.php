<?php
require_once "../src/login.php";

function alteraSenhaTeste()
{   
    $id = 1;
    $senha = 'abelha';
    if(!alteraSenha($senha,$id))
        throw new Exception("Não foi possível alterar a senha");



}