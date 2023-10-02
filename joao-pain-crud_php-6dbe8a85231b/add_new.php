<?php
include "db_conn.php";

if (isset($_POST['submit'])) {
    $nome_sobrenome = $_POST['nome_sobrenome'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $wpp  = $_POST['wpp'];
    $obs = $_POST['obs'];

    $sql = "INSERT INTO `cadastro_usuario`(`id`, `nome_sobrenome`, `email`, `genero`, `wpp`, `obs`) 
    VALUES (NULL,'$nome_sobrenome','$email','$genero','$wpp','$obs')";

    echo $sql;

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Novo registro criado com sucesso");
    } else {
        echo "Falha: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PHP CRUD Aplicação</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        Aplicação CRUD completo em PHP
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Adicionar novo usuário</h3>
            <p class="text-muted">Preencha o formulário abaixo para adicionar um novo usuário</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px">

                <div class="row">
                    <div class="col ">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome_sobrenome" placeholder="Nome completo" >

                    </div>

                    <div>
                        <label class="form-label mt-2">E-mail</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Endereço de e-mail" >
                    </div>

                    <div>
                        <label class="form-label mt-2">Telefone Celular</label>
                        <input type="tel" class="form-control" id="wpp" name="wpp" maxlength="15" pattern="\(\d{2}\)\s*\d{5}-\d{4}" >
                    </div>
                    <label class="form-label mt-2">Gênero</label>
                    <div class="form-group">
                        <input type="radio" class="form-check-input" name="genero" id="masc" value="Masc." checked>
                        <label for="masc" class="form-input-label">Masculino</label>

                        <input type="radio" class="form-check-input" name="genero" id="fem" value="Fem.">
                        <label for="fem" class="form-input-label">Feminino</label>
                    </div>

                    <div>
                        <label class="form-label mt-2">Observação</label>
                        <textarea class="form-control" id="obs" name="obs" rows="5" cols="50"></textarea>
                    </div>

                    <div class="mt-2">
                        <button type="submit" class="btn btn-success" name="submit">Salvar</button>
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!-- Bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        src = "https://code.jquery.com/jquery-3.6.0.min.js"
        src = "../jQuery-Mask-Plugin-master/"
    </script>
</body>
</html>

<script>    
const tel = document.getElementById('wpp') // Seletor do campo de telefone

tel.addEventListener('keypress', (e) => mascaraTelefone(e.target.value)) // Dispara quando digitado no campo
tel.addEventListener('change', (e) => mascaraTelefone(e.target.value)) // Dispara quando autocompletado o campo

const mascaraTelefone = (valor) => {
    valor = valor.replace(/\D/g, "")
    valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2")
    valor = valor.replace(/(\d)(\d{4})$/, "$1-$2")
    tel.value = valor // Insere o(s) valor(es) no campo
}
</script>
