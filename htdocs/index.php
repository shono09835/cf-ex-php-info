<?php
    require('test.php');
?>
<html>
    <head><title>Hello World!</title></head>
    <body>
        <h1><?php print helloWorld(); ?></h1>
        <p>Click <a href="/info.php">here to view PHP information</a></p>
        <p>Static resource test</p>
        <img src="technical-difficulties1.jpg" alt="technical difficulties" />
        <p>Property Test: <?php print (array_key_exists('test', $_GET) ? $_GET['test'] : 'None') ?> </p>
        <p>Env Test: <?php print (array_key_exists('SOME_VAR', $_ENV) ? $_ENV['SOME_VAR'] : 'None') ?></p>
        <p>Version: <?php print phpversion(); ?></p>
        <?php
            $number = mt_rand(1, 980); //980までの数値からrandomで整数値を1つ選ぶ
            switch (true){
            case $number <= 728: //1～728(10ms-100ms)
                $x = mt_rand(10, 100);
                usleep($x * 1000);
                break;
            case $number <= 899: //729～899(100ms-500ms)
                $x = mt_rand(100, 500);
                usleep($x * 1000);
                break;
            case $number <= 951: //900～951(0ms-10ms)
                $x = mt_rand(0, 10);
                usleep($x * 1000);
                break;
            default: //952～980(500ms-1000ms)
                $x = mt_rand(500, 1000);
                usleep($x * 1000);
            }
        ?>
    </body>
</html>:wq
