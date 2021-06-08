<?php

declare(strict_types=1);

var_dump(getCountUniqueWord($_GET['unique_text']));

function getCountUniqueWord(string $messages): int
{
    $arrayWord = explode(' ',$messages);
    $arrayWord = array_unique($arrayWord);
    return count($arrayWord);
}

?>

<form>
    <input type="text" name="unique_text">
    <button type="submit">send</button>
</form>
