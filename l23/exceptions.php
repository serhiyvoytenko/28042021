<?php

class TestException extends Exception
{
}

/**
 * @throws Exception
 */
function errorGenerator(): void
{
    $randomInt = random_int(0, 2);
    var_dump($randomInt);

    switch ($randomInt) {
        case 0:
            throw new Exception('Exception demo for all user', 543);
        case 1:
            throw new Exception('New exception for 1', 23);
    }
    echo 'Hi<br>';

}

try {
    errorGenerator();
} catch (Exception $exception) {
    var_dump($exception);
//   echo $exception->getCode().'<br>';
//   echo $exception->getMessage().'<br>';
//   var_dump($exception->getTrace());
} finally {
    echo 'Finally<br>';
}

echo 'Hi, over try';
//try {
//    mkdir($concurrentDirectory = __DIR__ . '/newDir') || is_dir($concurrentDirectory);
//} catch (Exception $exception) {
//    echo $exception;
//    echo 'Not created';
//}
//if (!mkdir($concurrentDirectory = __DIR__ . '/newdir') && !is_dir($concurrentDirectory)) {
//    throw new RuntimeException("Directory {$concurrentDirectory} was not created");
//}