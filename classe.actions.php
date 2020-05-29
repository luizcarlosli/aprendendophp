<?php







function teste1()
{
    include 'connect.php';
    $verificar1 = $_POST['teste1'];

    $sql = "INSERT INTO bdteste (teste_campo) VALUES ('$verificar1')";
    $inserir = mysqli_query($conexao, $sql);

    header("Location: form2.php");
}

function teste2()
{
    include 'connect.php';
    $verificar2 = $_GET['teste2'];

    $sqlD = "DELETE FROM bdteste WHERE id_teste = $verificar2";
    $deletar = mysqli_query($conexao, $sqlD);
    
    header("Location: form2.php");
}

function teste3()
{
    include 'connect.php';
    $id = $_POST['id'];
    $verificar3 = $_POST['teste3'];

    $sql = "UPDATE bdteste SET teste_campo = '$verificar3' where id_teste = $id";
    $update = mysqli_query($conexao, $sql);
    
    header("Location: form2.php");
}

if (isset($_POST['teste1'])) {
    teste1();
} else if (isset($_GET['teste2'])) {
    teste2();
} else if(isset($_POST['teste3'])) {
    teste3();
}
