<?php
$array_menu = array(
    array(
        'id' => 10,
        'parent' => 0,
        'title' => 'Computers',
        'link' => 'computers.php',
        'childs' =>
            array(
                array(
                    'id' => 11,
                    'parent' => 10,
                    'title' => 'Laptop',
                    'link' => 'laptop.php',
                    'childs' =>
                        array(
                            array(
                                'id' => 12,
                                'parent' => 11,
                                'title' => 'Asus',
                                'link' => 'asus.php',
                            ),
                            array(
                                'id' => 13,
                                'parent' => 11,
                                'title' => 'Lenovo',
                                'link' => 'lenovo.php',
                            ),
                            array(
                                'id' => 14,
                                'parent' => 11,
                                'title' => 'Xiaomi',
                                'link' => 'xiaomi.php',
                            ),
                            array(
                                'id' => 15,
                                'parent' => 11,
                                'title' => 'Apple',
                                'link' => 'apple.php',
                            ),
                        ),
                ),
                array(
                    'id' => 16,
                    'parent' => 10,
                    'title' => 'Tablets',
                    'link' => 'tablets.php',
                    'childs' =>
                        array(
                            array(
                                'id' => 17,
                                'parent' => 16,
                                'title' => 'Xiaomi',
                                'link' => 'xiaomi.php',
                                'childs' =>
                                    array(
                                        array(
                                            'id' => 18,
                                            'parent' => 17,
                                            'title' => 'White',
                                            'link' => 'white.php',
                                        ),
                                        array(
                                            'id' => 19,
                                            'parent' => 17,
                                            'title' => 'Black',
                                            'link' => 'black.php',
                                        ),
                                    ),
                            ),
                            array(
                                'id' => 20,
                                'parent' => 16,
                                'title' => 'Lenovo',
                                'link' => 'lenovo.php',
                                'childs' =>
                                    array(
                                        array(
                                            'id' => 21,
                                            'parent' => 20,
                                            'title' => 'White',
                                            'link' => 'white.php',
                                        ),
                                        array(
                                            'id' => 22,
                                            'parent' => 20,
                                            'title' => 'Black',
                                            'link' => 'black.php',
                                        ),
                                    ),
                            ),
                        ),

                ),
            ),
    ),
    array(
        'id' => 23,
        'parent' => 0,
        'title' => 'Clothes',
        'childs' =>
            array(
                array(
                    'id' => 24,
                    'parent' => 23,
                    'title' => 'Dresses',
                    'link' => 'dresses.php',
                ),
                array(
                    'id' => 25,
                    'parent' => 23,
                    'title' => 'Chirts',
                    'link' => 'chirts.php',
                ),
                array(
                    'id' => 26,
                    'parent' => 23,
                    'title' => 'Coats',
                    'link' => 'coats.php',
                ),
            ),
    ),
    array(
        'id' => 27,
        'parent' => 0,
        'title' => 'Sport',
        'link' => 'sport.php',
        'childs' =>
            array(
                array(
                    'id' => 28,
                    'parent' => 27,
                    'title' => 'Boats',
                    'link' => 'boats.php',
                ),
                array(
                    'id' => 29,
                    'parent' => 27,
                    'title' => 'Bicycle',
                    'link' => 'bicycle.php',
                ),
            ),
    ),
    array(
        'id' => 30,
        'parent' => 0,
        'title' => 'About',
        'link' => 'about.php',
    ),
);

//echo '<pre>';
//print_r($array_menu);
//echo '</pre>';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
<nav>
    <p>Collapsing:</p>
    <ul class="collapsable">
        <li>a
            <ul>
                <li>a1
                <li>a2
            </ul>
        <li>b
            <ul>
                <li>b1
            </ul>
    </ul>
    <p>Not collapsing:</p>
    <ul>
        <li>a
            <ul>
                <li>a1
                <li>a2
            </ul>
        <li>b
            <ul>
                <li>b1
            </ul>
    </ul>
</nav>
<?php
function recursive_perebor($array)
{
    if (!is_array($array)) return $array;
    else {
        $str='';
        foreach ($array as $key=> $values) {
        $str .= ' '.$key.'=>'.recursive_perebor($values);
        }
    }
    return $str;
}


var_dump(recursive_perebor($array_menu));
?>
</body>
</html>

