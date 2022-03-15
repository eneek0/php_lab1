<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gelasio:wght@500&family=Lora&family=Poppins&display=swap');
        </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="logo.png" height="90px" width="90px" alt="">
        <h1 class="header__heading">Feedback form</h1>
    </header>
    <main>
        <form action="https://httpbin.org/post" class="form" method="POST">
            <label for="firstName" class="label">Имя</label>
            <input type="text" class="input" id="firstName" name="First name" placeholder="Введите имя">
            <label for="email" class="label">E-mail</label>
            <input type="email" class="input" id="email" name="E-mail" placeholder="Введите e-mail">
            <label for="appeal" class="label">Тип обращения</label>
            <select class="input" id="appeal" name="Appeal">
                <option selected="" disabled="disabled">Тип обращения</option>
                <option value="complaint">Жалоба</option>
                <option value="offer">Предложение</option>
                <option value="gratitude">Благодарность</option>
            </select>
            <label for="text" class="label">Текст обращения</label>
            <textarea class="area" name="Text" id="text" rows="7"></textarea>
            <span>Вариант ответа</span>
            <span>
                <label for="checkbox1">
                    <input type="checkbox" id="checkbox1" name="answer" value="sms">
                    <span class="label">SMS</span>
                </label>
                <label for="checkbox2">
                    <input type="checkbox" id="checkbox2" name="answer" value="e-mail">
                    <span class="label">E-mail</span>
                </label>
            </span>
            <div class="buttons">
                <button class="button" type="submit">Отправить</button>
                <a class="button" href="form.php">Перейти</a>
            </div>
        </form>
    </main>
    <footer>
        <p class="footer__text">Собрать сайт из двух страниц.</p>
    </footer>
</body>
</html>