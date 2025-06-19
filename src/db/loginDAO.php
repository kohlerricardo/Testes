<?php
require_once 'db.php';

function consultaLogin($username,$password)
{
    
    $sql = "select * from usuario where username = ? and password = ?";
    $conn = conectar();
    $result = buscarUnico($conn,$sql,[$username,$password]);
    desconectar($conn);
    if(!$result){    
        return ['error'=>true,'msg'=>"Erro. Usuário não encontrado"];
    }
    $usuario = ['username' => $result['username'],
                        'nome'    => $result['nome']
                ];
    return $usuario;
}