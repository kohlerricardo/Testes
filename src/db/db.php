<?php

function conectar()
{
    $host = '127.0.0.1';
    $user = 'root';
    $password ='';
    $database = 'projeto';
    $db = mysqli_connect($host,$user,$password,$database) or die("Erro. Não foi possível conectar");
    return $db;
}
function desconectar($db)
{
    mysqli_close($db);
}
function inserir($db,$query,$dados)
{
    $result = mysqli_execute_query($db,$query,$dados);
    if(!$result){
        return "Erro ao inserir";
    }
    return $result;
}


function buscar($db,$query)
{
    $result = mysqli_execute_query($db,$query);
    $array = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $array;
}
function buscarUnico($db,$query,$parametro) {
    $result = mysqli_execute_query($db,$query,$parametro);
    $array = mysqli_fetch_array($result,MYSQLI_ASSOC);
    return $array;
}
function editar($db,$query,$dados)
{
    $result = mysqli_execute_query($db,$query,$dados);
    if(!$result){
        return "Erro ao atualizar";
    }
    return $result;
}

function excluir($db,$query,$dados)
{
    $result = mysqli_execute_query($db,$query,$dados);
    if(!$result){
        return "Erro ao excluir";
    }
    return $result;
}



