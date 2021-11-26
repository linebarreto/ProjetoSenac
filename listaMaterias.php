<?php 
    require('crud.php');
    include_once('header.php'); 
?>

<section class="container mt-3">
    <?php if (isset($_GET['status'])) : ?>
        <p class="text-success"><?=$_GET['status']?></p>
    <?php endif; ?>
    <a class="btn btn-light m-2" href="viewAdmin.php">Voltar</a>
    <a class="btn btn-light m-2 align-right" href="cadastroMateriaForm.php">Adicionar Matéria</a>
    <div class="row text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Matéria</th>
                    <th scope="col">Professor</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Editar/Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach(getMaterias() as $row) :
                    $prof = getProfessorName($row['cpfProf']);
                    $curso = getCursoNome($row['idCurso']);
                ?>
                <tr>
                    <th scope="row"><?=$row['idMateria']?></th>
                    <td><?=$row['nomeMateria']?></td>
                    <td><?=$prof['nomeProf']?></td>
                    <td><?=$curso['nomeCurso']?></td>
                    <td colspan="2">
                        <a href="editMateriaForm.php?materia=<?=$row['idMateria']?>" class="m-2"><i class="far fa-edit"></i></a>
                        <a href="./actions/deleteMateria.php?materia=<?=$row['idMateria']?>" class="m-2"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
</body>

</html>