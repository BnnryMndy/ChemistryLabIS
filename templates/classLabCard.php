<div class="card">
    <div class="card-body p-2">
        <h5 class="card-title">Лабораторная работа <?echo $labNumber;?></h5>
        <p class="text-secondary">7 класс</p>
        <p class="text-success"><b class="text-secondary">статус:</b> <?echo $status;?></p>
        <p class="text-warning"><b class="text-secondary">Осталось проверить:</b> <?echo $checksRemain;?></p>
        <a href="labsList.php" class="btn btn-primary">Приступить к проверке</a>
    </div>
</div>