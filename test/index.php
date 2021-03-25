<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>TestTask</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="js/jqueryui/jquery-ui.css">
    <link rel="stylesheet" href="js/jqueryui/jquery-ui.theme.css">
</head>
<body>
    <!-- HEADER -->
    <div class="main">

        <div class="header">
            <div class="icon-logo">
                <img src="logo.png" alt="logo">
            </div>
            <div class="text-logo">
                <p>WORLD BANK<br>Publications</p>
            </div>
            <div class="phones">
                <p>8-800-100-5005<br>+7(3452)522-000</p>
            </div>
        </div>
    
        <div class="menu">
            <div><a href="">Кредитные карты</a></div>
            <div><a href="">Вклады</a></div>
            <div><a href="">Дебетовая карта</a></div>
            <div><a href="">Страхование</a></div>
            <div><a href="">Друзья</a></div>
            <div><a href="">Интернет-банк</a></div>
        </div>
    </div>
    <!-- HEADER -->

    <!-- BREADCRUMB -->
    <div class="second">
        <div class="breadcrumb">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Вклады</a></li>
                <li class="active">Калькулятор</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB -->

    <!-- CALCULATION FORM -->
    <form action="index.php" method="POST">
        <div class="parent-form">
            <h1>Калькулятор</h1>
            <div class="form">
    
                <div class="sign">Дата оформления вклада</div>
                <div class="field"><input type="text" id="datepicker"></div>
                <div class="void"></div>
    
                <div class="sign">Сумма вклада</div>
                <div class="field"><input type="text" name="sum" id="amount1"></div>
                <div class="slider slider1"></div>
    
                <div class="sign">Срок вклада</div>
                <div class="field">
                    <select id="term">
                    <option value="12">1 год</option>
                    <option value="24">2 года</option>
                    <option value="36">3 года</option>
                    <option value="48">4 года</option>
                    <option value="60">5 лет</option>
                    </select>
                </div>
                <div class="void"></div>
    
                <div class="sign">Пополнение вклада</div>
                <div class="field">
                    <input type = "radio" name = "choice" value = "no" checked>Нет
                    <input type = "radio" name = "choice" value = "yes">Да
                </div>
                <div class="void"></div>
    
                <div class="sign">Сумма пополнения вклада</div>
                <div class="field"><input type="text" name="sumadd" id="amount2"></div>
                <div class="slider slider2"></div>
            </div>
    
            <div class="calc">
                <div class="calc-btn">
                    <input type="submit" name="button" id="calc-btn" value="Рассчитать">
                </div>
                <div class="result"><a>Результат:</a>
                <?php
                    if(isset($_POST))
                    {
                        $sum = (int)$_POST['sum'];
                        $sumadd = (int)$_POST['sumadd'];
                        $choice = (bool)$_POST['choice'];
                        $daysn = 30;
                        $percent = 10;
                        $daysy = 365;
        
                        $res = $sum + ($sum + $sumadd) * $daysn * ($percent / $daysy);
        
                        echo '<input type="text" id="res" name="result" value="'.$res.'">';
                    }
                ?>   
                </div>
                <div class="void"></div>
            </div>
        </div>
    </form>
    <!-- CALCULATION FORM -->

    <!-- FOOTER -->
    <footer>
        <div class="footer">
            <a href="">Кредитные карты</a>
            <a href="">Вклады</a>
            <a href="">Дебетовая карта</a>
            <a href="">Страхование</a>
            <a href="">Друзья</a>
            <a href="">Интернет-банк</a>
        </div>
    </footer> 
    <!-- FOOTER -->

    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/jqueryui/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <!-- SCRIPTS -->

    
</body>
</html>