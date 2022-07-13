<?php
require "Expression.php";
require "Context.php";
require "Terminal.php";
require "Add.php";

$lex = "{{ 1 1 + }}"; // 후위 표기법 어휘
$context = new Context($lex);

if ($token = $context->isStart()) {
    echo "연산 해석 시작 \n";
    $stack = []; // 스택
    while(true)  {
        $token = $context->next();
        if ($token == "}}") {
            echo "구문 연산 종료\n";
            break;
        }

        if (is_numeric($token)) {
            echo $token . " 스택 저장\n";
            array_push($stack, new Terminal($token));
        } else if ($token == "+") {
            echo "+ 연산 ";

            // 스택에서 두 개의 피연산자를 읽음
            $left = array_pop($stack);
            $right = array_pop($stack);

            // 비종료 연산을 수행합니다.
            $add = new Add($left, $right);
            $value = $add->interpret();
            echo "= " . $value . "\n";
            // 결과를 다시 스택에 저장합니다.
            array_push($stack, new Terminal($value));
        }
    }
} else {
    echo "판별 할 수 없는 해석입니다.";
}

echo "최종 결과 = " . array_pop($stack)->interpret();