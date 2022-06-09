<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>О нас</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>О нас</h3>
    <p> <a href="index.php">Главная</a> / О нас </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>О чем сайт?</h3>
            <p>У нас собрана информация о свойствах еды по всему миру, а также немного интересных фактов о них.</p>
            <a href="index.php" class="btn">Перейти</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>Раздел продукты</h3>
            <p>Тут можно узнать много нового о продуктах. Об их свойствах, технике приготовления или историю появления.</p>
            <a href="prod.php" class="btn">Перейти</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>Раздел блюда</h3>
            <p>А здесь можно узнать много интересных фактов об истории блюд и технике приготовления.</p>
            <a href="bluda.php" class="btn">Перейти</a>
        </div>

    </div>

</section>


<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>