<?php 

loadModel('ForgotPass');
session_start();
$exception = null;

if (count($_POST) > 0 ) { 
    // print_r($_POST);
    try { 
        $forgot = new ForgotPass($_POST);
        $user = $forgot->checkForgot();
        addSuccessMsg('Email Enviado com Sucesso');

    } catch(AppException $e) { 

        $exception = $e; 
    }
}




loadView('forgot_pass',['exception' => $exception ]);