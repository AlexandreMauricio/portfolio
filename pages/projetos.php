<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <title>Projetos</title>
</head>

<body>
    <header>
        <?php 
            include 'header.php';
        ?>
    </header>
    <main>
        <div id="intro" class="container-lg mt-3 p-5 text-center">
            <h2>Projetos recentes em que trabalhei:</h1>
        </div>
        <div class="d-grid gap-3 container-lg d-flex flex-column">
                <p class="text-center"><strong>Projetos:</strong></p>
                <?php ?>
                <div class="card align-self-center" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="Imagem do projeto">
                        <div class="card-body">
                            <h5 class="card-title">Nome do projeto</h5>
                            <p class="card-text">Descrição do projeto.</p>
                            <a href="#" class="btn btn-primary">Link para página sobre projeto ou o próprio projeto</a>
                        </div>
                </div>
                <div class="card align-self-center" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="Imagem do projeto">
                        <div class="card-body">
                            <h5 class="card-title">Nome do projeto</h5>
                            <p class="card-text">Descrição do projeto.</p>
                            <a href="#" class="btn btn-primary">Link para página sobre projeto ou o próprio projeto</a>
                        </div>
                </div>
                <div class="card align-self-center" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="Imagem do projeto">
                        <div class="card-body">
                            <h5 class="card-title">Nome do projeto</h5>
                            <p class="card-text">Descrição do projeto.</p>
                            <a href="#" class="btn btn-primary">Link para página sobre projeto ou o próprio projeto</a>
                        </div>
                </div>
                <?php ?>
            </div>
    </main>
    <footer>
        <?php 
            include 'footer.php';
        ?>
    </footer>
    <!-- JS -->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>