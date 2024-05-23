<?php
     $usuario = [
    'nome' => 'João',
    'email' => 'joaoemail.com',
    'senha' => '123456789',
    'confirmacao_senha' => '123456789'
];

 function validarCadastro($user){

     if (strlen($user["nome"]) < 5) {
        echo "Nome invalido";
        return false;
    }
    
    if (strlen($user["senha"]) <= 7 or (strlen ($user["senha"])) >=17) {
        echo "Senha invalida";
        return false;
    }
    
    if ($user["senha"] != $user["confirmacao_senha"]){
        echo "Senha não é igual";
        return false;
    }
    
    echo "cadastro valido : ";
    return true;
 }
 
 
 
 
 echo validarCadastro($usuario); 
 
 
 
?>
