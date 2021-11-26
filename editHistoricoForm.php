<?php 
    require('crud.php');
    include_once('header.php'); 

    $idHist = $_GET['historico'];
?>

<section class="container">
    <div class="mt-5 justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="width: 30rem;">
                <article class="card-body">
                    <form action="./actions/editHistorico.php" method="POST">
                        <?php foreach (getHistorico($idHist) as $row) : ?>
                            <div class="form-group">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" name="id" class="form-control"
                                value="<?=$row['idHist']?>">
                        </div>
                        <div class="form-group">
                            <label for="aluno" class="form-label">CPF do Aluno</label>
                            <input type="text" name="alunoCPF" class="form-control"
                                value="<?=$row['cpfAluno']?>">
                        </div>
                        <div class="form-group">
                            <label for="cursoALuno" class="form-label">Curso</label>
                            <select name="curso" class="form-select form-control" id="curso">
                                <option selected>Selecione um curso</option>
                                <?php foreach(getCursos() as $cursos) : ?>
                                <option value="<?=$cursos['idCurso']?>"
                                    <?php if ($cursos['idCurso'] == $row['idCurso']) echo('selected') ?>>
                                    <?=$cursos['nomeCurso']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="turmaAluno" class="form-label">Turma</label>
                            <select name="turma" class="form-select form-control" id="turma">
                                <option selected>Selecione um professor</option>
                                <?php foreach(getTurmas() as $turma) : ?>
                                <option value="<?=$turma['idTurma']?>"
                                    <?php if ($turma['idTurma'] == $row['idTurma']) echo('selected') ?>>
                                    <?=$turma['idTurma']?></option>
                                <?php endforeach; ?>
                            </select>
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