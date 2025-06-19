<?php
require_once 'loginTests.php';
require_once 'updatePassTest.php';

assert(testeLoginTudoCerto());
echo "Passou teste LoginTudoCerto\n";
assert(testeLoginSemUsuario());
echo "Passou teste LoginSemUsuario\n";
assert(testeLoginSemSenha());
echo "Passou teste testeLoginSemSenha\n";
assert(testeLoginSenhaIncorreta());
echo "Passou teste testeLoginSenhaIncorreta\n";

assert(alteraSenhaTeste());