<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="logo.png" height="90px" width="90px" alt="">
        <h1 class="header__heading">Feedback form</h1>
    </header>
    <main>
        <form>
            <?php
                $url = 'https://httpbin.org' ;
                $answer = get_headers($url);
            ?>
            <textarea name="" id="" cols="50" rows="20">
                <?php
                    print_r($answer);
                ?>
            </textarea>
        </form>
    </main>
    <footer>
        <p class="footer__text">Собрать сайт из двух страниц.</p>
    </footer>
</body>
</html>