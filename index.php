<?php
  
    $nickname = "Александр";
    $recommend = "Этот сайт одновременно и учебный и рабочий по PHP";
    $balance = 49;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой учебный сайт по PHP ПРОДОЛЖЕНИЕ</title>
    <!-- Добавляем шрифты с гугл -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=Cormorant:wght@300&family=Montserrat+Alternates:ital,wght@0,100;1,100&family=Philosopher&family=Zen+Antique&display=swap" rel="stylesheet">
    <!-- Добавили файл нормалайз -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- подключили наш файл CSS -->
    <link rel="stylesheet" type="text/css" href="style.css"></link>
</head>
<body>
<h1>Мой учебный сайт по PHP - ПРОДОЛЖЕНИЕ</h1>
<h5 class="subtitle">Часть 2</h5>
    <section class="phh-text-output">
        <h2>PHP: Вывод текста</h2>
        <p>
            В PHP есть два основных способа вывода данных: echo и print.
        </p>
        <p>
            <strong>echo</strong> и <strong>print</strong> в принципе делают одно и то же - выводят данные на экран, но всё же имеют и некоторые отличия друг от друга. echo не имеет возвращаемого значения и может принимать несколько аргументов. print при использовании возвращает 1, поэтому может быть использован в выражениях, и принимает только один аргумент.
        </p>
        <div class="php-outpost-echo">
            <h2>echo</h2>
            <p>
                Обратите внимание, что echo можно писать двумя способами с круглыми скобками и без них: echo или echo(). Если вы используете синтаксис с круглыми скобками, то передать можно только один аргумент. При использовании синтаксиса без скобок, можно передавать несколько аргументов, разделяя их запятыми.  
            </p>
            <p>
                Следующий пример показывает, как выводить текст с помощью echo. Обратите внимание, что текст может содержать HTML разметку.  
            </p>
            <p>
                Пример кода: <br>
                    ?php <br>
                        echo "h2>PHP это легко! /h2>"; <br>
                        echo "Сейчас я изучаю PHP! br>"; <br>
                        echo "Эта ", "строка ", "была ", "сделана", " из нескольких аргументов."; <br>
                    ?> <br>
                    Теперь ниже смотрим код в действиии.
            </p>
            <div class="code-php">
                <?php
                echo "<h2>PHP это легко!</h2>";
                echo "Сейчас я изучаю PHP!<br>";
                echo "Эта ", "строка ", "была ", "сделана", " из нескольких аргументов.";
                ?>
            </div>
            <p>
            Теперь рассмотрим вывод текста вместе с переменным: <br>
            Пример кода: <br>
            ?php <br>
                $txt1 = "PHP это легко!"; <br>
                $txt2 = "PuzzleWeb.ru"; <br>
                $x = 3; <br>
                $y = 8; <br>
                
                echo " h2>$txt1 /h2>"; <br>
                echo "Сейчас я изучаю PHP на $txt2 br>"; <br>
                echo $x + $y; <br>
            ?> 
            </p>
            <p> Смотрим код в действии.</p>
            <div class="php-code">
                <?php
                    $txt1 = "PHP это легко!";
                    $txt2 = "PuzzleWeb.ru";
                    $x = 3;
                    $y = 8;
                    
                    echo "<h2>$txt1</h2>";
                    echo "Сейчас я изучаю PHP на $txt2<br>";
                    echo $x + $y;
                ?>
            </div>
        </div>
        <div class="php-outpost-print">
            <h2>print</h2>
            <p>
                print, так же как и echo можно писать в двух вариантах (со скобками и без них): print или print(). Но в отличие от echo, какой бы вариант написания вы ни выбрали, print может принять только один аргумент.
            </p>
            <p>
                Следующий пример показывает, как выводить текст с помощью print. Обратите внимание, что текст может содержать HTML разметку. 
            </p>
            <p>
                Пример кода: <br>
                    ?php <br>
                        print " h2>PHP это легко! /h2>"; <br>
                        print "Сейчас я изучаю PHP! br>"; <br>
                    ?> 
            </p>
            <p>Смотрим код в действии.</p>
            <div class="php-code">
                    <?php
                        print "<h2>PHP это легко!</h2>";
                        print "Сейчас я изучаю PHP!<br>";
                        print "И мне это нравится.";
                    ?>
            </div>
            <p>Теперь рассмотрим вывод текста вместе с переменным:</p>
            <p>Пример кода: <br>
                ?php <br>
                    $txt1 = "PHP это легко!"; <br>
                    $txt2 = "PuzzleWeb.ru"; <br>
                    $x = 3; <br>
                    $y = 8; <br>
                    
                    print " h2>$txt1 /h2>"; <br>
                    print "Сейчас я изучаю PHP на $txt2 br>"; <br>
                    print $x + $y; <br>
                ?>
            </p>
            <p>Смотрим код в действии.</p>
            <div class="php-code">
                <?php
                    $txt1 = "PHP это легко!";
                    $txt2 = "PuzzleWeb.ru";
                    $x = 3;
                    $y = 8;
                    
                    print "<h2>$txt1</h2>";
                    print "Сейчас я изучаю PHP на $txt2<br>";
                    print $x + $y;
                ?>
            </div>


        </div>
        
    </section>
    
</body>
</html>