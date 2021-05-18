<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Проверка лабораторной работы</title>
</head>
<body>
    <div class="container">
        <?require "templates/header.php";?>
        <h1 class="mt-5">Лабораторная работа 3</h1>
        <h5 class="mb-5 text-muted">Яшина Алексея</h5>
        <a href="TeacherCabinet.php" class="btn btn-outline-warning">Отмена</a>
        <p>Упражнение лабораторной работы</p>
        <div class="form-floating">
            <textarea disabled class="form-control" id="rightAnswer"></textarea>
            <label for="rightAnswer">ответ</label>
        </div>

        <p>Упражнение лабораторной работы</p>
        <div class="form-floating">
            <textarea disabled class="form-control" id="rightAnswer"></textarea>
            <label for="rightAnswer">ответ</label>
        </div>

        <form class="" action="">
            <div class="input-group mt-5">
                <input type="text" class="form-control w-25" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-success" type="button" id="button-addon2">Выставить оценку</button>
            </div>
        </form>
    </div>
</body>
</html>