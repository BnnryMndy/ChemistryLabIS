<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/teacherCabinet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>ЛК учителя</title>
</head>
<body>

    <div class="container">
        <?require "templates/header.php";?>
        <h1 class="mt-5">C возращением,</h1>
        <h2 class="text-muted mb-5">Ирина станиславовна</h2>
        <a class="btn btn-outline-primary mb-3 mt-3" href="AddLab.php">Добавить лабораторную работу</a>
            <div class="card">
                <div class="card-body p-2">
                <h5 class="card-title">Лабораторная работа 3</h5>
                    <p class="text-secondary">7 класс</p>
                    <p class="text-success"><b class="text-secondary">статус:</b> выдано</p>
                    <p class="text-warning"><b class="text-secondary">Осталось проверить:</b> 5</p>
                    <a href="labsList.php" class="btn btn-primary">Приступить к проверке</a>
                </div>
            </div>
    </div>
</body>
</html>