<?php

function updateUsuario(array $params, $id )
{
    $sql = 'update usuario set';
    foreach ($params as $key=>$value)
    {
        $sql = $sql . $key . '=' .$value ;
    }
    echo $sql;
}