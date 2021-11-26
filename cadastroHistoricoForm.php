<?php 
    require('crud.php');
    include_once('header.php'); 

?>

<section class="container">
    <div class="mt-5 justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="width: 30rem;">
                <article class="card-body">
                    <form action="./actions/cadastrarHistorico.php" method="POST">
                        <div class="form-group">
                            <label for="alunoCPF" class="form-label">CPF do Aluno</label>
                            <input type="text" name="alunoCPF" class="form-control" placeholder="000.000.000-00">
                        </div>
                        <div class="form-group">
                            <label for="cursoALuno" class="form-label">Curso</label>
                            <select name="curso" class="form-select form-control" id="curso">
                                <option selected>Selecione um curso</option>
                                <?php foreach(getCursos() as $cursos) : ?>
                                <option value="<?=$cursos['idCurso']?>">
                                    <?=$cursos['nomeCurso']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="turma" class="form-label">Turma</label>
                            <select name="turma" class="form-select form-control" id="turma">
                                <option selected>Selecione uma turma</option>
                                <?php foreach(getCursos() as $row) : ?>
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