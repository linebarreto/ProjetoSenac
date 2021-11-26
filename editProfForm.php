<?php 
    require('crud.php');
    include_once('header.php'); 

    $cpfProfessor = $_GET['professor'];
?>

<section class="container">
    <div class="mt-5 justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="width: 30rem;">
                <article class="card-body">
                    <form action="./actions/editProf.php" method="POST">
                        <?php foreach (getProfessor($cpfProfessor) as $row) : ?>
                        <div class="form-group">
                            <label for="nomeAluno" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do Aluno"
                                value="<?=$row['nomeProf']?>">
                        </div>
                        <div class="form-group">
                            <label for="cpfProf" class="form-label">CPF</label>
                            <input name="cpf" class="form-control" placeholder="000.000.000-00" type="text"
                                value="<?=$row['cpfProf']?>">
                        </div>
                        <div class="form-group">
                            <label for="cpfProf" class="form-label">Telefone</label>
                            <input name="telefone" class="form-control" placeholder="(00)00000000" type="text"
                                value="<?=$row['telefoneProf']?>">
                        </div>
                        <div class="form-group">
                            <label for="cpfProf" class="form-label">Email</label>
                            <input name="email" class="form-control" placeholder="aa@aacom" type="text"
                                value="<?=$row['emailProf']?>">
                        </div>
                        <?php endforeach; ?>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </div>
</section>
</body>

</html>