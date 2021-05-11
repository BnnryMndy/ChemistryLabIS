<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/addLab.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
    <title>Добавление лабораторной работы</title>
</head>
<body>
    <? require "php/header.php";?>
    <div class="container">
    <form action="" method="POST">
        
      <div class="form-floating m-2">
        <input type="number" id="labNumber" class="form-control">
        <label class="form-label" for="labNumber">Номер лабораторной работы</label>
      </div>
        <div class="card m-2 p-3">
        <fieldset>
    <legend>Добавление задания</legend>
    <div class="form-floating">
        <textarea class="form-control"  id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Задание</label>
    </div>
    Добавить правильный ответ?<br>
    <input type="radio" name="isHaveAwnser" id="yes">Да
    <input type="radio" name="isHaveAwnser" id="no">Нет
    <div class="form-floating">
        <textarea class="form-control"  id="rightAnswer"></textarea>
        <label for="rightAnswer">правильный ответ</label>
    </div>
</fieldset>
        </div>
        <div class="form-outline">
 
        <div style="margin-top: 40px;" class="btn-group" role="group" aria-label="Basic example">
          <input class="btn btn-primary addTask" id="button-0" onclick="addTask()" type="button" value="Добавить задание"> 
          <input disabled class="btn btn-danger" id="none-del"  onclick="delTask()" type="button" value="удалить задание">
          <input  class="btn btn-success" type="submit" value="Отправить">
        </div>
    </form>
    </div>
</body>
</html>