<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/addLab.js"></script>

    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>

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
        <input disabled id="none-del"  onclick="delTask()" type="button" value="удалить задание">
        <input type="submit" value="Отправить">
    </form>
    </div>
</body>
</html>