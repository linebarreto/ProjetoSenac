<?php 
    require('crud.php');
    include_once('header.php'); 
?>

<section class="container mt-3">
    <?php if (isset($_GET['status'])) : ?>
        <p class="text-success"><?=$_GET['status']?></p>
    <?php endif; ?>
    <a class="btn btn-light m-2" href="viewAdmin.php">Voltar</a>
    <a class="btn btn-light m-2 align-right" href="cadastroHistoricoForm.php">Adicionar Historico</a>
    <div class="row text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Aluno CPF</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Editar/Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach(getHistoricos() as $row) :
                        $curso = getCursoNome($row['idCurso']);
                ?>
                <tr>
                    <th scope="row"><?=$row['cpfAluno']?></th>
                    <td><?=$curso['nomeCurso']?></td>
                    <td><?=$row['idTurma']?></td>
                    <td colspan="2">
                        <a href="editHistoricoForm.php?historico=<?=$row['idHist']?>" class="m-2"><i class="far fa-edit"></i></a>
                        <a href="./actions/deleteHistorico.php?historico=<?=$row['idHist']?>" class="m-2"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
</body>

</html>