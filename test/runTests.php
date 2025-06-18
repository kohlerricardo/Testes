<?php
require_once 'loginTests.php';

assert(testeLoginTudoCerto(),"Erro no login tudo certo");
assert(testeLoginSemUsuario());
