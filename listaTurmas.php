<?php 
    require('crud.php');
    include_once('header.php'); 
?>

<section class="container mt-3">
    <?php if (isset($_GET['status'])) : ?>
        <p class="text-success"><?=$_GET['status']?></p>
    <?php endif; ?>
    <a class="btn btn-light m-2" href="viewAdmin.php">Voltar</a>
    <a class="btn btn-light m-2 align-right" href="cadastroTurmaForm.php">Adicionar Turma</a>
    <div class="row text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Turma</th>
                    <th scope="col">Editar/Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach(getTurmas() as $row) :
                ?>
                <tr>
                    <th scope="row"><?=$row['idTurma']?></th>
                    <td colspan="2">
                        <a href="editTurmaForm.php?turma=<?=$row['idTurma']?>" class="m-2"><i class="far fa-edit"></i></a>
                        <a href="./actions/deleteTurma.php?turma=<?=$row['idTurma']?>" class="m-2"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
</body>

</html>