<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 1</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container" style="margin-top: 40px; width: 500px;">
        <h3>Lista de Categorias</h3><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome Categoria</th>

                    <th scope="col">Ações</th>
                </tr>
            </thead>


            <?php
            include 'connect.php';
            $sql = "SELECT * FROM bdteste";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_teste_delete = $array['id_teste'];
                $nome_campo_teste = $array['teste_campo'];


            ?>
                <tr>
                    <td><?php echo $nome_campo_teste ?></td>

                    <td>

                        <a class="btn btn-warning btn-sm m-1" style="color: #ffffff" href="form3.php?teste3=<?php echo $id_teste_delete ?>" role="button">Editar</a>
                        <a class="btn btn-danger btn-sm m-1" style="color: #ffffff" href="classe.actions.php?teste2=<?php echo $id_teste_delete ?>" role="button">Excluir</a>
                    </td>
                </tr>

            <?php } ?>

        </table>

        <hr>
        <a class="btn btn-success btn-sm m-1" style="color: #ffffff" href="form1.php" role="button">Adicionar</a>

    </div>

</body>

</html>