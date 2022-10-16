<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Занятие 4</title>
</head>
<body>
    <div class="container">
        <h2>Самостоятельные задачи</h2>
        <div class="task">
            <h3>Просто</h3>
            <?php
                $users = ['Вася' => 37, 'Коля' => 12, 'Вика' => 40, 'Катя' => -15];
                print_r($users); 
            ?>
        </div>
        <div class="task">
            <h3>Поиск данных</h3>
            <?php
                $users = [0=>'Вася', 1=>'Петя', 2=>'Оля', 3=>'Коля', 4=>'Вика', 5=>'Митя'];
                $key = 2;
                if (isset($users[$key])) {
                    echo $users[$key];
                } else {
                    echo 'Данные не найдены';
                }
            ?>
        </div>
        <div class="task">
            <h3>Глоссарий</h3>
            <?php
                $dictionary = ['Корова'=>' — отелившаяся самка крупного рогатого скота, то есть домашнего быка.',
                          'Рыба'=>' — живущее в воде и дышащее жабрами позвоночное животное с конечностями в виде плавников, с холодной кровью и с кожей, покрытой чешуёю.',
                          'Кошка'=>' — домашнее животное, одно из наиболее популярных «животных-компаньонов».',
                          'Тигр'=>' — вид хищных млекопитающих семейства кошачьих, один из пяти представителей рода пантера, который относится к подсемейству больших кошек.'];
                $enter_word = 'Кошка';
                if (isset($dictionary[$enter_word])) {
                    echo $enter_word, $dictionary[$enter_word];
                } else {
                    echo 'Данные не найдены';
                }
            ?>
        </div>
        <div class="task">
            <h3>Выше крыши</h3>
            <?php
                $users = ['Вася' => 37, 'Коля' => 12, 'Вика' => 110, 'Катя' => 15];
                $name = "Вика";
                echo "Репутация $name до: $users[$name]";
                if (isset($users[$name]) && $users[$name] > 100) {
                    $users[$name] = 100;
                }
                echo " и после: $users[$name]";
            ?>
        </div>
        <div class="task">
            <h3>Данила Мастер</h3>
            <?php
                $users = ['Вася' => 37, 'Коля' => 50, 'Вика' => 100, 'Катя' => 15];
                $enter_name = 'Коля';
                if (isset($users[$enter_name])) {
                    if ($users[$enter_name] <= 30) {
                        echo "$enter_name имеет статус новичка";
                    } elseif ($users[$enter_name] > 30 && $users[$enter_name] <= 60) {
                        echo "$enter_name имеет статус мастера";
                    } elseif ($users[$enter_name] > 60) {
                        echo "$enter_name имеет статус грандмастера";
                    }
                } else {
                    echo 'Данные не найдены';
                }
            ?>
        </div>
        <div class="task">
            <h3>Рейтинг +1</h3>
            <?php
                $users = ['Вася' => 37, 'Коля' => 12, 'Вика' => 40, 'Катя' => -15];
                $enter_user = 'Миша';
                if (isset($users[$enter_user])) {
                    $users[$enter_user] += 1;
                } else {
                    $users[$enter_user] = 0;
                }
                print_r($users);
            ?>
        </div>
        <div class="task">
            <h3>Бан</h3>
            <?php
                $users = ['Вася' => 37, 'Коля' => 12, 'Вика' => 40, 'Катя' => -15];
                $enter_name = 'Катя';
                if ($users[$enter_name] < 0) {
                    unset($users[$enter_name]);
                }
                print_r($users);
            ?>
        </div>
        <div class="task">
            <h3>Файл</h3>
            <?php
                $path = 'C:\\Windows\\dirname\\file.exe';
                $path_fold = explode("\\", $path);
                $file_name = $path_fold[count($path_fold) - 1];
                unset($path_fold[count($path_fold) - 1]);
                $dir_name = implode('\\', $path_fold);

                echo "Имя файла: $file_name". PHP_EOL;
                echo "Папка: $dir_name". PHP_EOL;
            ?>
        </div>
        <div class="task">
            <h3>Царь горы</h3>
            <?php
                $users = ['Вася' => 37, 'Коля' => 12, 'Вика' => 40, 'Катя' => -15, 'Саша' => 10, 'Никита' => 0, 'Женя' => 45, 'Ваня' => 89];
                arsort($users);
                print_r($users);
            ?>
        </div>
        <div class="task">
            <h3>День недели</h3>
            <?php
                $day_week_rus = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
                $day_week_ing = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
                $text = 'В monday проходили соревнования по хокею. thursday выдался дождливым. На sunday у меня уже была куча планов. В friday мы собирались у Кати.';
                echo str_replace($day_week_ing, $day_week_rus, $text);
            ?>
        </div>
        <div class="task">
            <h3>Лето</h3>
            <?php
                $seasons = ['декабрь' => 'зима', 'январь' => 'зима', 'февраль' => 'зима',
                            'март' => 'весна', 'апрель' => 'весна', 'май' => 'весна',
                            'июнь' => 'лето', 'июль' => 'лето', 'август' => 'лето',
                            'сентябрь' => 'осень', 'октябрь' => 'осень', 'ноябрь' => 'осень'];
                $enter_month = 'декабрь';
                echo "Месяц $enter_month соответствует времени года $seasons[$enter_month].";
            ?>
        </div>
        <div class="task">
            <h3>Корзина</h3>
            <?php
                $cart = [ 13 => ['name'=>'Кеды', 'count'=>2, 'price'=>123], 
                          28 => ['name'=>'Самолет', 'count'=>1, 'price'=>9999999] ];
                $enter_id = 28;
                $product = $cart[$enter_id];
                if (isset($product)) {
                    echo $product['price'];
                } else {
                    echo 'Данного товара нет в корзине';
                }
            ?>
        </div>
    </div>
</body>
</html>