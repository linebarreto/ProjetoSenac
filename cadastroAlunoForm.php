<?php 
    require('crud.php');
    include_once('header.php'); 
?>

<section class="container">
    <div class="mt-5 justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="width: 30rem;">
                <article class="card-body">
                    <form action="./actions/cadastrarAluno.php" method="POST">

                        <div class="form-group">
                            <label for="nomeAluno" class="form-label">Nome</label>
                            <input type="text" id="nomeAluno" name="nome" class="form-control"
                                placeholder="Nome do Aluno">
                        </div>
                        <div class="form-group">
                            <label for="cpfAluno" class="form-label">CPF</label>
                            <input name="cpf" class="form-control" placeholder="000.000.000-00" type="text">
                        </div>
                        <div class="form-group">
                            <label  class="form-label">Telefone</label>
                            <input name="telefone" class="form-control" placeholder="(00)0000000" type="text">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input name="email" class="form-control" placeholder="aaa@aaa.com" type="text">
                        </div>
                        <div class="form-group">
                            <label for="senhaAluno" class="form-label">Senha</label>
                            <input name="senha" class="form-control" placeholder="****" type="password">
                        </div>
                        <div class="form-group">
                            <label for="cursoALuno" class="form-label">Curso</label>
                            <select name="curso" class="form-select form-control" id="curso">
                                <option selected>Selecione um curso</option>
                                <?php foreach(getCursos() as $row) : ?>
                                <option value="<?=$row['idCurso']?>"><?=$row['nomeCurso']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="turmaAluno" class="form-label">Turma</label>
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