<?php 
    require('crud.php');
    include_once('header.php'); 
?>

<section class="container">
    <div class="mt-5 justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="width: 30rem;">
                <article class="card-body">
                    <form action="./actions/cadastrarCurso.php" method="POST">

                        <div class="form-group">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" id="nomeProf" name="nome" class="form-control"
                                placeholder="Nome do Curso">
                        </div>
                        <div class="form-group">
                            <label for="professor" class="form-label">Professor</label>
                            <select name="professor" class="form-select form-control" id="turma">
                                <option selected>Selecione um professor</option>
                                <?php foreach(getProfessores() as $row) : ?>
                                <option value="<?=$row['cpfProf']?>"><?=$row['nomeProf']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="turma" class="form-label">Turma</label>
                            <select name="turma" class="form-select form-control" id="turma">
                                <option selected>Selecione uma turma</option>
                                <?php foreach(getTurmas() as $row) : ?>
                                <option value="<?=$row['idTurma']?>"><?=$row['idTurma']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
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