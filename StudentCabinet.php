<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>ЛК ученика</title>
</head>
<body>
    <div class="container">
        <?require "templates/header.php";?>
        <h1 class="mt-5">C возращением,</h1>
        <h2 class="text-muted mb-5">Яшин Алексей</h2>

        <h3>Выданные работы</h3>
        <div class="card">
            <div class="card-body p-2">
            <h5 class="card-title">Лабораторная работа 3</h5>
                <p class="text-success"><b class="text-secondary">статус:</b> выдано</p>
                <a href="#" class="btn btn-primary">Приступить к выполнению</a>
            </div>
        </div>
        <h3 class="mt-5">Проверенные работы</h3>

        <div class="card">
            <div class="card-body p-2">
            <h5 class="card-title">Лабораторная работа 2</h5>
                <p class="text-success"><b class="text-secondary">статус:</b> оценено</p>
                <p class="text-success"><b class="text-secondary">оценка:</b> 8/10</p>
            </div>
        </div>

    </div>

    
</body>
</html>