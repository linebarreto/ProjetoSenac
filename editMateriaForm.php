<?php 
    require('crud.php');
    include_once('header.php'); 

    $idMateria = $_GET['materia'];
?>

<section class="container">
    <div class="mt-5 justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="width: 30rem;">
                <article class="card-body">
                    <form action="./actions/editMateria.php" method="POST">
                        <?php foreach (getMateria($idMateria) as $row) : ?>
                        <div class="form-group">
                            <label for="nomeMateria" class="form-label">ID</label>
                            <input type="text" name="id" class="form-control"
                                value="<?=$row['idMateria']?>">
                        </div>
                        <div class="form-group">
                            <label for="nomeMateria" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome da Matéria"
                                value="<?=$row['nomeMateria']?>">
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