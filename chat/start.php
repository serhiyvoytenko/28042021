<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="zzz">
    <p>This class zzz</p>
</div>
<h1>This is h1</h1>
<h3 class="zzz">Hi</h3>
<h4>This is H4</h4>
<?php


function power($arr, $exp): array
{
    // переменная $func будет хранить ссылку на объект класса Closure, который описывает наше замыкание
    $func = static function ($el) use ($exp) {
        return $el ** $exp;
    };

    return array_map($func, $arr);
}

$list = [1, 3, 4];

var_dump(power($list, 2)); // Выведет: array(3) {[0]=>int(1) [1]=>int(9) [2]=>int(16)}
var_dump(power($list, 3)); // Выведет: array(3) {[0]=>int(1) [1]=>int(27) [2]=>int(64)}

?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>

<script>
    $('h3').css({'color': 'green', 'font-weight': 'bolder'});
    $('.zzz').css('color', 'red');
    $(':header').css('color', 'blue');
    $(':header:not(.zzz)').css('color', 'orange');
    console.log($("<p>My first jQuery text</p>"));
</script>
</body>
</html>