<?php 
    require('crud.php');

    $status = session_status();

    if($status == PHP_SESSION_NONE) {
        session_start();
    }
    
    $adminLogado = $_SESSION['adminLogado'];
    
    if(!isset($adminLogado)) {
        header('Location: formAdmin.php?status=Favor+efetuar+login');
        exit;
    }

    include_once('header.php')
?>

<section class="container">
    <div class="mt-5 justify-content-center">
        <h2 class="text-center m-5">Área do Administrador</h2>
        <div class="d-flex flex-column align-items-center">
            <div class="card">
                <article class="card-body">
                    <a class="btn btn-primary btn-block" href="listaAlunos.php">Alunos</a>
                    <a class="btn btn-primary btn-block" href="listaHistoricos.php">Histórico dos Alunos</a>
                    <a class="btn btn-primary btn-block" href="listaProf.php">Professores</a>
                    <a class="btn btn-primary btn-block" href="listaCursos.php">Cursos</a>
                    <a class="btn btn-primary btn-block" href="listaMaterias.php">Matérias</a>
                    <a class="btn btn-primary btn-block" href="listaTurmas.php">Turmas</a>
                </article>
            </div>
        </div>
    </div>
    </div>
</section>
</body>

</html>