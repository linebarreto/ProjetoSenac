<?php

  include_once('./crud.php');
  session_destroy();
  unset($_SESSION['adminLogado']);
  unset($_SESSION['alunoLogado']);

  session_start(); 

  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];

  if($alunoLogado = listarAluno($cpf, $senha)){
    $_SESSION['alunoLogado'] = $alunoLogado;
    header('Location: viewAluno.php?status=sucess');
    exit;
  } else {
    header('Location: formAluno.php?status=fail');
    exit;
  }
