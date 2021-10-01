<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <title>Alexandre Maurício</title>
</head>

<body>
    <header>
        <?php 
            include 'header.php';
        ?>
    </header>
    <main>
        <div id="intro" class="container-lg mt-3 p-5">
            <h2>Olá, o meu nome é Alexandre Maurício. Sou estudante de Engenharia Informática da Escola Superior de
                Tecnologia do Instituto Politécnico de Castelo Branco</h1>
        </div>
        <img src="..." class="img-fluid" alt="...">
        <div class="d-grid gap-5 p-5">
            <div class="container-lg">
                <p><strong>Sobre mim:</strong></p>
                <p class="lead">
                    Atualmente estudo Engenharia Informática na Escola Superior de Tecnologia do Instituto Politécnico
                    de
                    Castelo Branco, onde comecei a explorar web development e outras áreas do meu interesse. Pode ver os
                    meus trabalhos <a href="projetos.php" target="_blank" rel="noopener noreferrer">aqui</a>.
                    Gosto de trabalhar em projetos à parte para além dos que tenho da escola. Atualmente não estou a
                    aceitar
                    projetos de freelancing, mas adorava discutir ideias sobre projetos.
                </p>
            </div>
            <div class="d-grid gap-3 container-lg">
                <p><strong>Áreas de interesse:</strong></p>
                <div>
                    <p style="color:red"><em>Computer networks</em></p>
                    <p class="lead">
                        Irei desenhar e planear redes de computador tendo em conta cybersegurança contra
                        vulnerabilidades possíveis.
                    </p>
                </div>
                <div>
                    <p style="color:red"><em>Web Development</em></p>
                    <p class="lead">
                        Front End e Back End Development. Usando HTML, CSS , Javascript e PHP, crio websites o melhor
                        que
                        consigo e o mais rápido possível, usando Bootstrap.
                    </p>
                </div>
            </div>
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