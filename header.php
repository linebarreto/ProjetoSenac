<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Escola</title>
</head>

<body>
    <?php 
        $status = session_status();
    
        if($status == PHP_SESSION_NONE){
            session_start();
        }
        
        $alunoLogado = $_SESSION['alunoLogado'] ?? "";
        $adminLogado = $_SESSION['adminLogado'] ?? "";
    ?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="../pages/home.php">
                <img src="../img/" alt="" class="img-fluid rounded">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
                aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto ml-5 text-center ">
                <a class="navbar-brand" href="index.php">Escola do Saber</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Alunos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php if(empty($alunoLogado)) : ?>
                            <a class="dropdown-item" href="formAluno.php">Entrar</a>
                            <?php else : ?>
                            <a class="dropdown-item text-danger" href="logoutAluno.php">Logout</a>
                            <?php endif; ?>
                            <a class="dropdown-item" href="viewAluno.php">Visualizar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administração
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php if(empty($adminLogado)) : ?>
                            <a class="dropdown-item" href="formAdmin.php">Entrar</a>
                            <?php else : ?>
                            <a class="dropdown-item text-danger" href="logoutAdmin.php">Logout</a>
                            <?php endif; ?>
                            <a class="dropdown-item" href="viewAdmin.php">Visualizar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>