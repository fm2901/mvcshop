<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <h1>Кабинет пользователя</h1>
            <h3>Привет,<?php echo $user['name']?></h3>
            <ul>
                <li><a href="/mvcshop/cabinet/edit">Редактировать данные</li></a>
                <li><a href="/mvcshop/cabinet/history">Список покупок</li></a>
            </ul>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>