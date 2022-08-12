<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Blog | <?= $this->subTitle ?></title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="<?= $this->getStyleSheet() ?>">
    <script defer src="https://kit.fontawesome.com/3fb918250b.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>
<body>
    <header>
        <div class="container">
            <h1>Samuel's Blog</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About me</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="content">
        {{content}}
    </div>
</body>
</html>