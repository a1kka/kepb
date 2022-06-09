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
   <title>Главная</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Кулинарная энциклопедия продуктов и блюд</h3>
      <a href="about.php" class="btn">О нас</a>
   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>Есть вопросы?</h3>
      <p>Кулинарный сайт с самой интересной информацией о мире еды и проверенными на собственной кухне рецептами</p>
      <a href="contact.php" class="btn">Связаться с нами</a>
   </div>

</section>




<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>