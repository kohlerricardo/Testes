<?php
require_once 'db/loginDAO.php';

function login($usuario,$senha)
{
    if(empty($usuario) || empty ($senha)){
        return false;
    }
    $senha = sha1($senha);
    $usuario = consultaLogin($usuario,$senha);
    if(isset($usuario['error']))
        return false;
    return $usuario;
}
function alteraSenha($senha,$id)
{
    $sql = "select * from usuario where id_usuario = ?";
    $conn = conectar();
    $result = buscarUnico($conn,$sql,[$id]);
    if($result){
        if(sha1($senha)===$result['password'])
        {
            desconectar($conn);
            throw new Exception("Nova senha não pode ser igual a antiga");
        }
        else
        {
            updateUsuario(['senha'=>$senha],$id);
            
        }
    }
}