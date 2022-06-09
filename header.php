<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

    <div class="flex">

        <a href="home.php" class="logo">КЭПБ</a>

        <nav class="navbar">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="prod.php">Продукты</a></li>
                <li><a href="bluda.php">Блюда</a></li>
                
                <li><a href="#">Войти ⇓</a>
                    <ul>
                        <li><a href="login.php">Авторизация</a></li>
                        <li><a href="register.php">Регистрация</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            
           
            
        </div>

        <div class="account-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Выход</a>
        </div>

    </div>

</header>