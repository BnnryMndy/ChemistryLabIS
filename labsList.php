<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>ЛР к проверке</title>
</head>
<body>
<div class="container">
        <?require "templates/header.php";?>
        <h1 class="mt-5">Лабораторные работы 3</h1>
        <h2 class="text-muted mb-5">7 класса</h2>
        <a href="TeacherCabinet.php" class="btn btn-outline-warning mb-3">Отмена</a>
            <div class="card mb-3">
                <div class="card-body p-2">
                <h5 class="card-title">Яшин Алексей</h5>
                    <p class="text-warning"><b class="text-secondary">статус:</b> сдано</p>
                    
                    <a href="#" class="btn btn-primary">Приступить к проверке</a>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body p-2">
                <h5 class="card-title">Лазарев Антон</h5>
                    <p class="text-success"><b class="text-secondary">статус:</b> Проверено</p>
                    <a href="#" class="btn btn-primary">Просмотреть</a>
                </div>
            </div>
    </div>
</body>
</html>