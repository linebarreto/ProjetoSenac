<?php 
    require('crud.php');
    include_once('header.php');
?>

<section class="container">
    <div class="mt-5 justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="width: 30rem;">
                <article class="card-body">
                    <form action="./actions/cadastrarProf.php" method="POST">

                        <div class="form-group">
                            <label for="nomeProf" class="form-label">Nome</label>
                            <input type="text" id="nomeProf" name="nome" class="form-control"
                                placeholder="Nome do Professor">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" id="nomeProf" name="email" class="form-control"
                                placeholder="aa@aa.com">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Telefone</label>
                            <input type="text" id="nomeProf" name="telefone" class="form-control"
                                placeholder="(00)00000000">
                        </div>
                        <div class="form-group">
                            <label for="cpfProf" class="form-label">CPF</label>
                            <input name="cpf" class="form-control" placeholder="000.000.000-00" type="text">
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