<?php
require_once 'db/db.php';

function consultaLogin($user,$pass)
{
    $sql = "select * from usuario where login = ? and password = ?";
    $conn = conectar();
    $result = buscarUnico($conn,$sql,[$user,$pass]);
    if(count($result)!=1){
        return "Erro. Usuário não encontrado";
    }
    global $usuario = ['username' => $result['username'],
                        'nome'    => $result['Nome']
                    ];
}