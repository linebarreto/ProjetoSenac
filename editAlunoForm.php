<?php 
    require('crud.php');
    include_once('header.php'); 

    $cpfAluno = $_GET['aluno'];
?>

<section class="container">
    <div class="mt-5 justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="width: 30rem;">
                <article class="card-body">
                    <form action="./actions/editAluno.php" method="POST">
                        <?php foreach (getAluno($cpfAluno) as $row) : ?>
                        <div class="form-group">
                            <label for="nomeAluno" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do Aluno"
                                value="<?=$row['nomeAluno']?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email do Aluno"
                                value="<?=$row['emailAluno']?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Telefone</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Telefone do Aluno"
                                value="<?=$row['telefoneAluno']?>">
                        </div>
                        <div class="form-group">
                            <label for="cpfAluno" class="form-label">CPF</label>
                            <input name="cpf" class="form-control" placeholder="000.000.000-00" type="text"
                                value="<?=$row['cpfAluno']?>">
                        </div>
                        <div class="form-group">
                            <label for="senhaAluno" class="form-label">Senha</label>
                            <input name="senha" class="form-control" placeholder="****" type="password">
                        </div>
                        <div class="form-group">
                            <label for="cursoALuno" class="form-label">Curso</label>
                            <select name="curso" class="form-select form-control" id="curso">
                                <option selected>Selecione um curso</option>
                                <?php foreach(getCursos() as $cursos) : ?>
                                <option 
                                    value="<?=$cursos['idCurso']?>"
                                    <?php if ($cursos['idCurso'] == $row['idCurso']) echo('selected') ?>
                                ><?=$cursos['nomeCurso']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="turmaAluno" class="form-label">Turma</label>
                            <select name="turma" class="form-select form-control" id="turma">
                                <option selected>Selecione uma turma</option>
                                <?php foreach(getTurmas() as $turmas) : ?>
                                    <option 
                                    value="<?=$turmas['idTurma']?>"
                                    <?php if ($turmas['idTurma'] == $row['idTurma']) echo('selected') ?>
                                ><?=$turmas['idTurma']?></option>
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