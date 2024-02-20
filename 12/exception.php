<?php

function calculate($num1, $num2, $operator) {
    // is_numeric(入力値が整数かどうかチェック)
    // intval(小数点以下切り捨て)
    if (!is_numeric($num1) || !is_numeric($num2) || intval($num1) != $num1 || intval($num2) != $num2) {
        throw new Exception("num1、num2には整数を入力してください");
    }

    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                throw new Exception("ゼロによる割り算は許可されていません");
            }
            return $num1 / $num2;
        default:
            throw new Exception("演算子には +、-、*、/のいずれかを使用してください");
        
    }
}

try {
    echo calculate(1, 0, '/') . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

try {
    echo calculate(1.5, 2, '**') . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

try {
    echo calculate(5, 2, '*') . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}