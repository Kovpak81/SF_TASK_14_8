<?php
include 'function.php';

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

// функция для проверки наличия логина в книге паролей
function existsUser($username, $p, $new) {
    for ($i = 0; $i < $p; $i++) {
         if ($username === $new[$i][0]) {
            $username === true;
            // print_r('такой логин есть в базе');
            return $username;
         }
    }
}
// existsUser($username, $p, $new);

// функция для получения номера логина в массиве
function numberAt($username, $p, $new) {
    for ($i = 0; $i < $p; $i++) {
    if ($username === $new[$i][0]) {
        $a = $i;
        $username === true;
        return $a; 
    }else{
     continue;
    }
}
}

$a = numberAt($username, $p, $new);

// функция для проверки пароля
function checkPassword($password, $users, $username, $a) {
    if (md5($password) === $users[$a][$username]['password']) {
        print_r('пароль введен верно');
    }else{ 
        print_r('пароль введен неверно');
    }
}

// checkPassword($password, $users, $username, $a);

function getCurrentUser($username) {
    ($username !== null) ? $username === true : $username = 'Гость';
    return $username;
}

// getCurrentUser($username);


if (null !== $username || null !== $password) {
    // Если пароль из базы совпадает с паролем из формы
    if ((md5($password) === $users[$a][$username]['password'])&&($username === $new[$a][0])) {
       // Стартуем сессию:
        session_start(); 
        
   	 // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true; 
        
        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = $users[$a][$username]['id']; 
        $_SESSION['login'] = $username; 
        print_r($_SESSION['login']);
        // session_write_close();
        header('Location: second.php');
        exit();
    }
    // print_r($_SESSION['login']);
    }
    // print_r($_SESSION['login']);
// print_r($_SESSION['id']);

$auth = $_SESSION['auth'] ?? null;

// если авторизованы
if ($auth) {
?>
// контент для администратора
    <a href="index.php">Вернуться на главную</a>

<?php }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Функции</title>
</head>
<body>
    <div class="navigatin">
        <div class="wrapper">
            <div class="header">
                <form action="index.php" method="post">
                    <input name="login" type="text" placeholder="Логин">
                    <input name="password" type="password" placeholder="Пароль">
                    <input name="submit" type="submit" value="Войти">
                    <?php if ($password === null) {?>
                    <p class="wrong">Введите логин и пароль</p>
                    <?php }elseif(md5($password) !== $users[$a][$username]['password']){?>
                    <p class="wrong">Вы ввели неверно логин или пароль. Попробуйте еще раз</p><?php } ?>
                </form>
                <h1>АВТОСАЛОН №1</h1>
            </div>
            <div class="content">
                <img src="picBody.jpg" alt="Фото салона должно быть" class="laba">
                <div class="colomn">
                    <div class="row">
                        <p>Только сегодня скидка на зимний воздух на подкачку колес <span>15%</span></p>
                        <p>Только сегодня скидка на летний воздух в салон <span>10%</span></p>
                    </div>
                    <h2>Наш салон предлагает Вам услуги:</h2>
                    <p>Подкачка колес воздухом с малиновым вкусом!</p>
                    <p>Подкачка колес воздухом с клубничным вкусом!</p>
                    <p>Подкачка колес воздухом с банановым вкусом!</p>
                    <p><span>Новинка!!!</span>Подкачка колес воздухом со вкусом маракуйя!</p>
                </div>
            </div>
            <div class="footer">
                <div class="links">
                    <a href="#">Вакансии</a>
                    <a href="#">Контакты</a>
                    <a href="#">О нас</a>
                    <a href="#">Реклама</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>