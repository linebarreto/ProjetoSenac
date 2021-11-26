<?php 
    require('crud.php');
    include_once('header.php'); 
?>

<section class="container mt-3">
    <?php if (isset($_GET['status'])) : ?>
        <p class="text-success"><?=$_GET['status']?></p>
    <?php endif; ?>
    <a class="btn btn-light m-2" href="viewAdmin.php">Voltar</a>
    <a class="btn btn-light m-2 align-right" href="cadastroAlunoForm.php">Adicionar Aluno</a>
    <div class="row text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CPF</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Editar/Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach(listarAlunos() as $row) :
                ?>
                <tr>
                    <th scope="row"><?=$row['cpfAluno']?></th>
                    <td><?=$row['nomeAluno']?></td>
                    <td><?=$row['emailAluno']?></td>
                    <td><?=$row['telefoneAluno']?></td>
                    <td colspan="2">
                        <a href="editAlunoForm.php?aluno=<?=$row['cpfAluno']?>" class="m-2"><i class="far fa-edit"></i></a>
                        <a href="./actions/deleteAluno.php?aluno=<?=$row['cpfAluno']?>" class="m-2"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
</body>

</html>