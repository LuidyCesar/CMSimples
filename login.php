<?php 
if(isset($_POST['email'],$_POST['senha'])){
    //var_dump($_POST);
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $emailCerto = 'admin@admin.com';
    $senhaCerta = '0192023a7bbd73250516f069df18b500'; 
    
    if(($email == $emailCerto) AND (md5($senha) == $senhaCerta)){
        // echo "Só sucesso";
        session_start();
        $_SESSION['logado'] = true;
        
        // redirect
        header('location:cadastro_pagina.php');die;
    } else {
        $msg =  "email e/ou senha estão incorretos";
    }
}
    
?> 
<!DOCTYPE html>
<html>
    <head>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" 
              content="">
        <title>Login</title>
    </head>
    <body>
<form action="login.php" method="POST" class="form-horizontal">
<div class="control-group">
<label class="control-label" for="inputEmail">
    Email
</label>
<div class="controls">
<input name="email" type="email" id="inputEmail" 
       placeholder="Email" >
</div>
</div>
<div class="control-group">
<label class="control-label" for="inputPassword">
    Senha
</label>
<div class="controls">
<input name="senha" type="password" id="inputPassword" 
       placeholder="Senha">
</div>
</div>
<div class="control-group">
<div class="controls">
<label class="checkbox">
<input name="lembrar" value="sim" type="checkbox"> 
Lembre-se de mim
</label>
<button type="submit" class="btn">Entrar</button>
</div>
</div>
</form>       
    <?php
//    if(isset($msg)){
//        echo $msg;
//    } else {
//        echo '';
//    }    
    echo (isset($msg)) ? $msg:''; 
echo (isset($_GET['msg'])) ? $_GET['msg']:''; 
    ?>
    </body>
</html>
        
