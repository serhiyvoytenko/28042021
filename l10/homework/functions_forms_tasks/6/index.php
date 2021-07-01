<?php
//$file = ($_FILES)?$_FILES['input_file']:'';
//var_dump($_FILES);

if (!empty($_FILES)) {
    $countfiles = count($_FILES['input_file']['name']);
    for ($i = 0; $i < $countfiles; $i++) {
        copy($_FILES['input_file']['tmp_name'][$i],
            __DIR__ . '/gallery/' . $_FILES['input_file']['name'][$i]);
    }
}
//    foreach ($_FILES['input_file']['tmp_name'] as $values) {
//        copy($_FILES['input_file']['tmp_name'],
//            __DIR__ . '/gallery/' . $_FILES['input_file']['name']);
//    }
//}

foreach (scandir(__DIR__ . '/gallery') as $value) {
    echo ($value === '.' || $value === '..') ? '' : $value, '<br>';
};

echo '<br><hr>';
//var_dump();
?>

<form method="post" enctype="multipart/form-data">
    <input type="file"
           multiple
           name="input_file[]"
    >
    <button>Send file</button>
</form>
