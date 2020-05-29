<?php

include 'connect.php';

$teste3 = $_GET['teste3'];

?>

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

    <div class="container">
        <form action="classe.actions.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome para EDITAR</label>

                <?php

                $sql = "SELECT * FROM bdteste where id_teste = $teste3";
                $buscar = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($buscar)) {
                    $id_teste = $array['id_teste'];
                    $teste_campo = $array['teste_campo'];

                ?>

                    <input type="number" name="id" class="form-control" value="<?php echo $id_teste ?>" style="display: none;">
                    <input type="text" name="teste3" class="form-control" value="<?php echo $teste_campo ?>">
                <?php } ?>
            </div>

            <button type="submit" class="btn btn-primary">GO</button>
        </form>

    </div>

</body>

</html>