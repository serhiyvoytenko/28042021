

<form action="" method="GET">
	<input type="checkbox" name="hello" value="1">
    <button type="submit">Send</button>

    <textarea name="new_text"></textarea>
    <input type="submit">
</form>

<?php
var_dump($_GET);
	if (isset($_GET['hello']) && $_GET['hello'] === 1) {
        echo 'отмечен';
    }else{
	    echo 'не отмечен';
    }
?>