<?php

  include_once('./crud.php');
  session_destroy();
  unset($_SESSION['adminLogado']);
  unset($_SESSION['alunoLogado']);
  session_start(); 

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  if($adminLogado = listarAdmin($usuario, $senha)){
    $_SESSION['adminLogado'] = $adminLogado;
    header('Location: viewAdmin.php?status=sucess');
    exit;
  } else {
    header('Location: formAdmin.php?status=fail');
    exit;
  }