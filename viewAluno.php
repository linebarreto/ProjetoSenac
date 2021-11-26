<?php 
    require('crud.php');

    $status = session_status();

    if($status == PHP_SESSION_NONE){
        session_start();
    }
    
    $alunoLogado = $_SESSION['alunoLogado'] ?? '';
    $cpfAluno = $alunoLogado['cpfAluno'] ?? '';
    $nomeAluno = $alunoLogado['nomeAluno'] ?? '';

    
    if(empty($alunoLogado)) {
        header('Location: formAluno.php?status=Favor+efetuar+login');
        exit;
    }

    include_once('header.php'); 
?>

<section class="container mt-3">
    <h2 class="text-center m-5">Olá, <?=$nomeAluno?></h2>
    <div class="d-flex flex-column align-items-center">

        <div class="card" style="width: 18rem;">
            <div class="card-body m-2">
                <?php
                        foreach(getAlunoDados($cpfAluno) as $aluno) :
                    ?>
                <tr>
                    <p><strong>CPF: </strong><?=$aluno['cpfAluno']?></p>
                    <p><strong>Email: </strong><?=$aluno['emailAluno']?></p>
                    <p><strong>Telefone: </strong><?=$aluno['telefoneAluno']?></p>
                </tr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cursos Matrículados</th>
                    <th scope="col">Matérias</th>
                    <th scope="col">Turma</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach(getHistoricoAluno($cpfAluno) as $row) :
                        $idCurso = $row['idCurso'];
                        $materias = implode(", ", listarMateriasPorCurso($idCurso));
                        $curso = getCursoNome($row['idCurso']);
                ?>
                <tr>
                    <th><?=$curso['nomeCurso']?></th>
                    <td><?=$materias?></td>
                    <td><?=$row['idTurma']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
</body>

</html>