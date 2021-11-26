<?php 
    require('crud.php');
    include_once('header.php'); 

    $turma = $_GET['turma'];
?>

<section class="container">
    <div class="mt-5 justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="width: 30rem;">
                <article class="card-body">
                    <form action="./actions/editTurma.php" method="POST">
                        <?php foreach (getTurma($turma) as $row) : ?>
                        <div class="form-group">
                            <label for="turma" class="form-label">Número</label>
                            <input type="text" name="turma" class="form-control" placeholder="Número da turma"
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