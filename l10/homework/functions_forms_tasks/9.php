<?php

declare(strict_types=1);

$str = $_GET['string'];


function reverse(string $str):string{
    $strlen = strlen($str);
    $revers='';
    for ($i = $strlen - 1; $i >= 0; $i--) {
        $revers .= $str[$i];
    }
    return $revers;
}

//var_dump($revers);
echo reverse($str);
?>
<form>
    <input type="text" name="string">
    <button type="submit">Send</button>
</form>

