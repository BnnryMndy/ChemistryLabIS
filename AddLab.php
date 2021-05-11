<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/addLab.js"></script>
    <title>Добавление лабораторной работы</title>
</head>
<body>
    <div class="container">
    <form action="" method="get">
        
        <label for="labnumber">Номер лабораторной работы </label>
        <input name = "labnumber" type="number">
        
        <fieldset>
            <legend>Добавление задания</legend>
            <label for="taskDescription">Задание</label>
            <input name="taskDescription" type="text">
            Добавить правильный ответ?
            <input type="radio" name="isHaveAwnser" id="yes">Да
            <input type="radio" name="isHaveAwnser" id="no">Нет
            <label for="rightAwnser">правильный ответ</label>
            <input name="rightAwnser" type="text">
        </fieldset>
        <input id="button-0" class="addTask" onclick="addTask()" type="button" value="Добавить задание">

        <input type="submit" value="Отправить">
    </form>
    </div>
</body>
</html>