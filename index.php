<?php

require_once("TestClasses/UnionTypeTest.php");
require_once("TestClasses/NullSafeOperatorTest.php");
require_once("TestClasses/NamedArgumentsTest.php");

$unionTypeTest = new UnionTypeTest();
$nullSafeTypeTest = new NullSafeOperatorTest();
$namedArgumentsTest = new NamedArgumentsTest();

echo "Testando passar int na função foo(int|float \$input): int|float \n";
var_dump($unionTypeTest->foo(1));

echo "Testando passar float na função foo(int|float \$input): int|float \n";
var_dump($unionTypeTest->foo(1.2));

echo "Testando retornar datetime returnDateTime()  usando null safe operator \n";
echo $nullSafeTypeTest->returnDateTime()?->format("d/m/Y");

echo "Testando retornar null returnNullDateTime()  usando null safe operator \n";

$datetime = $nullSafeTypeTest->returnNullDateTime()?->format("d/m/Y");

if ($datetime == NULL) {
    return "NULL DateTime";
};

echo "Testando named arguments testReturnNamedArguments(a: 'test', b: 'test1', c: 'test2')";

echo $namedArgumentsTest->testReturnNamedArguments(b: 'Fernando1', a: 'Fernando', c:'Fernando2');

