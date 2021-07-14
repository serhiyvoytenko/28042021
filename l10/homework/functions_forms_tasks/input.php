<?php

function input(string $name = 'age', int $age = null): string
{
    if (!empty($_REQUEST[$name])){
        $age = (int)$_REQUEST[$name];
    }
//    var_dump($_REQUEST, $age);
    return "<input type='text' name='{$name}' value='{$age}' placeholder='Enter name'>";
}

//echo input('age', 40);

?>

<form>
    <?= input() ?>
    <br><br>
    <input type="submit">
</form>
