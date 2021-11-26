<?php
  session_start();
  session_destroy();
  unset($_SESSION['adminLogado']);
  header('location: index.php');
  exit;