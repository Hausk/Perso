<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Application web développé par Bessa Jonathan, Pour le projet 05 de ma formation.">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./public/IMG/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?= SCRIPTS . 'CSS' . DIRECTORY_SEPARATOR . 'fullpage.css' ?>">
    <link rel="stylesheet" href="<?= SCRIPTS . 'CSS' . DIRECTORY_SEPARATOR . 'App.css' ?>">
    <link rel="stylesheet" href="<?= SCRIPTS . 'CSS' . DIRECTORY_SEPARATOR . $CSS ?>">
    <title>Bessa - Jonathan</title>
</head>
<body>
    <nav>
        <div id="navigation">
            <div class="header-content">
            <div class="brand"><a title="Bessa Jonathan" href="./">Bessa Jonathan</a></div>
            </div>
            <div id="navbar">
                <div class="nav-item">
                <div class="three col">
                    <div class="hamburger" id="hamburger-3">
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <?= $content?>
    <script src="https://kit.fontawesome.com/1c182ad81c.js" crossorigin="anonymous"></script>
    <script src="./public/JS/home.js" crossorigin="anonymous"></script>
    <script src="./public/JS/about.js" crossorigin="anonymous"></script>
</body>
</html>