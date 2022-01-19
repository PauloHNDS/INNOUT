<?php 
loadModel('Login');
$exeception = null;

if(count($_POST) > 0){
    $login = new Login($_POST);
    try {
        $login->checkLogin();
        echo "Usuario logado com sucesso {$username}";
    } catch (Exception $e) {
        $exeception = $e;
    }
}

loadView('login', $_POST + ['exeception' => $exeception]);