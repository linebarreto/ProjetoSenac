<?php 
    require('crud.php');
    include_once('header.php'); 

    $idCurso = $_GET['curso'];
?>

<section class="container">
    <div class="mt-5 justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="width: 30rem;">
                <article class="card-body">
                    <form action="./actions/editCurso.php" method="POST">
                        <?php foreach (getCurso($idCurso) as $row) : ?>
                        <div class="form-group">
                            <label for="nomeCurso" class="form-label">ID</label>
                            <input type="text" name="id" class="form-control" placeholder="Nome do Aluno"
                                value="<?=$row['idCurso']?>">
                        </div>
                        <div class="form-group">
                            <label for="nomeCurso" class="form-label">Nome do Curso</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do Aluno"
                                value="<?=$row['nomeCurso']?>">
                        </div>
                        <div class="form-group">
                            <label for="turmaAluno" class="form-label">Professor</label>
                            <select name="professor" class="form-select form-control" id="turma">
                                <option selected>Selecione um professor</option>
                                <?php foreach(getProfessores() as $professor) : ?>
                                <option value="<?=$professor['cpfProf']?>"
                                    <?php if ($professor['cpfProf'] == $row['cpfProf']) echo('selected') ?>>
                                    <?=$professor['nomeProf']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="idTurma" class="form-label">Turma</label>
                            <input name="turma" class="form-control" placeholder="000.000.000-00" type="text"
                                value="<?=$row['idTurma']?>">
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