<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.03.19
 * Time: 21:47
 */
echo "Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
\n";
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operator'])) {
    $a = filter_var($_GET['a'], FILTER_VALIDATE_FLOAT);
    $b = filter_var($_GET['b'], FILTER_VALIDATE_FLOAT);
    $operator = filter_var($_GET['operator'], FILTER_SANITIZE_STRING);
    if ($a === false || $b === false || !$operator) {
        $result = 'Unknown error';
    } else {
        switch ($operator) {
            case '+':
                $result = "{$a} {$operator} {$b} = " . ($a + $b);
                break;
            case '-':
                $result = "{$a} {$operator} {$b} = " . ($a - $b);
                break;
            case '*':
                $result = "{$a} {$operator} {$b} = " . ($a * $b);
                break;
            case '/':
                if (!$b) {
                    $result = 'Division by zero';
                } else {
                    $result = "{$a} {$operator} {$b} = " . ($a / $b);
                }
                break;
            case '%':
                if (!$b) {
                    $result = 'Division by zero';
                } else {
                    $result = "{$a} {$operator} {$b} = " . ($a % $b);
                }
                break;
            default:
                $result = 'Unknown error';
        }
    }
}

if (isset($result)) {
    echo $result;
}
?>
