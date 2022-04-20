<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>lesson51</title>
</head>
<body>

<form action="sandmail.php" method="POST">
    <select name="subject">
        <option disabled selected>Тема письма</option>
        <option value="1">Вопрос по уроку</option>
        <option value="2">Личный вопрос</option>
        <option value="3">Благодарность</option>
    </select>
    <input type="email" name="email" placeholder="Введите ваш email" maxlenght="50" required>
    <textarea name="message" placeholder="Введите ваш текст" maxlenght="150" required></textarea>
    <img src="capcha1.jpg">
    <input type="number" name="capcha" placeholder="Ведите капчу" maxlength="3" required>
    <input type="submit" value="Отправить письмо">

</form>

</body>
</html>