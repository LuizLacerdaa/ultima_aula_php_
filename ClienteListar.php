<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Listagem de Clientes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center mb-4">Listagem de Clientes</h1>

        <div class="text-end mb-3">
            <a href="ClienteFormularioInserir.php" class="btn btn-primary">Adicionar novo cliente</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "conexao.php";
                    $sql = "SELECT * FROM login";
                    $resultado = mysqli_query($conexao, $sql);

                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>{$linha['id']}</td>";
                        echo "<td>{$linha['nome']}</td>";
                        echo "<td>{$linha['email']}</td>";
                        echo "<td class='text-center'>";
                        echo "<a href='ClienteExcluir.php?idexcluir={$linha['id']}' class='btn btn-danger btn-sm me-2' title='Excluir'>";
                        echo "<img src='imagens/del.png' alt='Excluir' width='20' /></a>";
                        echo "<a href='ClienteFormularioAlterar.php?idalterar={$linha['id']}' class='btn btn-warning btn-sm' title='Editar'>";
                        echo "<img src='imagens/edit.png' alt='Editar' width='20' /></a>";
                        echo "</td>";
                        echo "</tr>";
                    }

                    mysqli_close($conexao);
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
