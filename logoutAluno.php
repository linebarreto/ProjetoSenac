<?php
  session_start();
  session_destroy();
  unset($_SESSION['alunoLogado']);
  header('location: index.php');
  exit;