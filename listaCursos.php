<?php 
    require('crud.php');
    include_once('header.php'); 
?>

<section class="container mt-3">
    <?php if (isset($_GET['status'])) : ?>
        <p class="text-success"><?=$_GET['status']?></p>
    <?php endif; ?>
    <a class="btn btn-light m-2" href="viewAdmin.php">Voltar</a>
    <a class="btn btn-light m-2 align-right" href="cadastroCursoForm.php">Adicionar Curso</a>
    <div class="row text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Professor</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Editar/Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach(getCursos() as $row) :
                    $prof = getProfessorName($row['cpfProf']);
                ?>
                <tr>
                    <th scope="row"><?=$row['idCurso']?></th>
                    <td><?=$row['nomeCurso']?></td>
                    <td><?=$prof['nomeProf']?></td>
                    <td><?=$row['idTurma']?></td>
                    <td colspan="2">
                        <a href="editCursoForm.php?curso=<?=$row['idCurso']?>" class="m-2"><i class="far fa-edit"></i></a>
                        <a href="./actions/deleteCurso.php?curso=<?=$row['idCurso']?>" class="m-2"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
</body>

</html>