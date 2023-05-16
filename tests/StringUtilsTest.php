<?php
require_once __DIR__ . '/../vendor/autoload.php';
use function Tests\Project\StringUtils\capitalize;
if (capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

echo 'Все тесты пройдены!';