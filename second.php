<?php
$dayA = $_POST['day'] ?? null;
$monthA = $_POST['month'] ?? null;
$yearA = $_POST['year'] ?? null;

session_start();

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
                <div class="row">
                    <div>
                        <form action="index.php" method="post">
                            <input name="submit" type="submit" value="Выйти">
                            <p>Здравствуйте,<span class="red"> 
                                <?php echo $_SESSION['login'] ?>
                                !!!</span>
                            </p>
                        </form>
                    </div>

                </div>
                <h1>АВТОСАЛОН №1</h1>
                <p>Специальное предложение действительно:</p>
                <div class="time"></div>
            </div>
            <?php if (null === $monthA || null === $dayA) { ?>
                <form action="second.php" method="post">
                    <input name="year" type="number" placeholder="год">
                    <input name="month" type="number" placeholder="месяц">
                    <input name="day" type="number" placeholder="день">
                    <input name="submit" type="submit" value="Готово">
                    <p class="wrong">Введите Ваш день рождения</p>
                </form>
            <?php }else{ ?>
                <p id="polo">До дня рождения осталось:</p>
                <div id="monthP"></div>
                <div id="dayP"></div>
            <?php } ?>
            <div>
                        <p>Время входа на сайт:</p>
                        <div id="current_date_time_block"></div>
                    </div>
            <div class="content">
                <div class="colomn">
                    <div class="row">
                        <img src="picBody.jpg" alt="Фото салона должно быть" class="laba">
                        <p>Специально для Вас,<span> 
                        <?php echo $_SESSION['login'] ?>
                        </span>и только сегодня скидка на зимний воздух на подкачку колес <span>25%</span></p>
                        <p>Специально для Вас, <span>
                        <?php echo $_SESSION['login'] ?>
                        </span>и только сегодня скидка на летний воздух в салон <span>20%</span></p>
                    </div>
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
<script>
var x = 24*60*60*1000; // тоесть сутки
down = document.querySelector('.time'),
end = x;
 
function tick(e){
    var ost = end - e;
    if(ost < 0) {end = ost = x};
    var s = Math.floor(ost/1000),
    m = Math.floor(s/60),
    h = Math.floor(m/60),
    d = Math.floor(h/24);
    s = s%60+'';
    m = m%60+'';
    h = h%24+'';
    d = d+'';
    d = d.length == 1 ? '0'+d:d;
    h = h.length == 1 ? '0'+h:h;
    m = m.length == 1 ? '0'+m:m;
    s = s.length == 1 ? '0'+s:s;
 
    down.innerHTML = d+' дней '+h+' часов '+m+' минут '+s+' секунд';
    requestAnimationFrame(tick)
 
};
 requestAnimationFrame(tick)

</script>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php

if (null !== $monthA || null !== $dayA) {
    ?>
        <script>
    let monthB = <?php echo $monthA ?>;
    console.log(monthB);
    let dayB = <?php echo $dayA ?>;
    let yearB = <?php echo $yearA ?>;
     let birthDate = new Date(yearB, monthB, dayB);
     let month = birthDate.getMonth();
     var day = birthDate.getDate();
     let year = birthDate.getYear();
     
     let nextBirthDate = new Date(new Date().getFullYear() + 1, month, day);
     let diff = nextBirthDate - new Date();
     
     let monthC = new Date(diff).getUTCMonth() - 1;
     let dayC = new Date(diff).getUTCDate() - 1;

     let monthP = document.getElementById('monthP');

     let dayP = document.getElementById('dayP');

     monthP.textContent = `Месяцев - ${monthC}`;
    
     dayP.textContent = `Дней - ${dayC}`;
    </script>
    <?php
    }