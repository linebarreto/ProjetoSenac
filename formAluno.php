<?php 
    include_once("header.php"); 
?>
<section class="container">
    <div class="mt-5 justify-content-center">
        <h2 class="text-center m-5">Área do Aluno</h2>
        <div class="d-flex flex-column align-items-center">
            <div class="card">
                <article class="card-body">
                    <h4 class="card-title text-center mb-4 mt-1">Login</h4>
                    <hr>
                    <?php if(isset($_GET['status']) && $_GET['status'] == "fail") : ?>
                    <p class="text-danger text-center">
                        CPF ou senha incorretos.
                    </p>
                    <?php endif; ?>

                    <?php if(isset($_GET['status']) && $_GET['status'] != "fail") : ?>
                    <p class="text-danger text-center">
                        <?= $_GET['status'] ?>
                    </p>
                    <?php endif; ?>
                    <form action="verificarLoginAluno.php" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <input name="cpf" class="form-control" placeholder="Usuário" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input name="senha" class="form-control" placeholder="******" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </div>
</section>
</body>