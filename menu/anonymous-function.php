<?php

(static function(){
    echo 'HI','<br>';
})();
call_user_func(static function (){
    echo 'HIHI';
});
class A {
    static public function foo() {
        echo 42;
    }
}

$a = new A;
$a->foo();