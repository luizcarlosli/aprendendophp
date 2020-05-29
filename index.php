<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="alert alert-danger" role="alert" style="display: none;">
            Ops! Parece que tivemos um problema, informe o administrador.
        </div>

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="javascript:load_component('home.php');">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:load_component('administrador.php');">Administrador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:load_component('nao_existo.php');">Não existo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>

        <div id="content"></div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            load_component('home.php');
        });

        function load_component(url) {
            $.ajax({
                url: url,
                success: function(returnhtml) {
                    $('#content').html(returnhtml);
                },
                statusCode: {
                    404: function() {
                        $('.alert').show();
                    }
                }
            }).always(function() {
                $('.alert').hide();
            });
        }
    </script>
</body>

</html>