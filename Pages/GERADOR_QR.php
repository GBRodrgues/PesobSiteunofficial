<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./styles/media/favicon.ico" type="image/x-icon">
    <title>QR Code</title>
    <link rel="stylesheet" href="./styles/main.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
</head>

<body class="corpo" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!--Barra de navegação (1/2)-->
    <?php include "NAVBAR.html"; ?>

    <!--Corpo principal (2/2)-->
    <div class="w-80 mh-90 p-3 bg-white container rounded mt-3">
        <h2>Gerador de QR Code</h2>
        <form name="formCadastro" action="cadastro.php" method="POST" autocomplete="on" class="needs-validation ">

            <div class="form-group">
                <label for="titulo">Título da página:</label>
                <input type="text" class="form-control" id="titulo" aria-describedby="ajudaTitulo"
                    placeholder="Digite o título" required>
                <small id="ajudaTitulo" class="form-text text-muted">
                    O que for digitado aqui será o título da página ligada ao código QR
                </small>
            </div>

            <div class="form-group">
                <label for="cont">Conteúdo da pagina:</label>
                <textarea name="conteudo" id="cont" cols="30" rows="10" class="form-control"
                    placeholder="Digite o conteúdo" required aria-describedby="ajudaCont"></textarea>
                <small id="ajudaCont" class="form-text text-muted">
                    O que for digitado aqui, será implementado como o conteúdo da página
                </small>
            </div>

            <div class="form-group">
                <label for="imagem">Imagem complementar:</label>
                <input type="file" name="arquivos" id="imagem" class="form-control-file" accept="image/png, image/jpeg"
                    multiple />
            </div>
            <div class="form-group divLT">
                <button type="button" class="btn btn-primary form-control" data-toggle="modal"
                    data-target="#qrModal">Gerar QR Code</button>
            </div>
        </form>
    </div>

    <div class="modal fade" id="qrModal">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

                <!-- Cabecalho do modal -->
                <div class="modal-header">
                    <h4 class="modal-title">QR Code</h4>
                    <button type="button" class="close" data-dismiss="modal" &times;></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <img src="https://i.imgur.com/GsAruhf.png" alt="QRCODE" class="mw-100">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer divLT">
                    <button type="button" class="btn btn-primary form-control" data-dismiss="modal">
                        Sair
                    </button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>