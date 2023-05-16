<?php
require_once __DIR__ . '/../vendor/autoload.php';
use function Tests\Project\StringUtils\capitalize;
use Webmozart\Assert\Assert;

//if (capitalize('hello') !== 'Hello') {
//    throw new \Exception('Функция работает неверно!');
//}
//
//if (capitalize('') !== '') {
//    throw new \Exception('Функция работает неверно!');
//}

Assert::eq(capitalize('hello'), 'Hello');
Assert::eq(capitalize(''), '');


echo 'Все тесты пройдены!';

