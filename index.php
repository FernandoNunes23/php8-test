<?php

require_once("TestClasses/UnionTypeTest.php");
require_once("TestClasses/NullSafeOperatorTest.php");
require_once("TestClasses/NamedArgumentsTest.php");
require_once("TestClasses/AttributesTest.php");
require_once("TestClasses/ExampleAttribute.php");
require_once("TestClasses/MatchExpressionTest.php");
require_once("TestClasses/ConstructorPropertyPromotionTest.php");

$unionTypeTest = new UnionTypeTest();
$nullSafeTypeTest = new NullSafeOperatorTest();
$namedArgumentsTest = new NamedArgumentsTest();
$attributeTest = new AttributesTest();
$matchExpressionTest = new MatchExpressionTest();
$constructorPropertyPromotionTest = new ConstructorPropertyPromotionTest("Fernando", 28, "Active");

/**
 * TESTING UNION TYPES
 */
echo "Testando passar int na função foo(int|float \$input): int|float <br><br>";
echo "\$unionTypeTest->foo(1) <br>";
var_dump($unionTypeTest->foo(1));
echo "<hr><br>";

echo "Testando passar float na função foo(int|float \$input): int|float <br><br>";
echo "\$unionTypeTest->foo(1.2) <br>";
var_dump($unionTypeTest->foo(1.2));
echo "<hr><br>";

/**
 * TESTING NULL SAFE TYPE + New mixed type
 */
echo "Testando retornar datetime returnDateTime()  usando null safe operator <br><br>";
echo "\$nullSafeTypeTest->returnDateTime()?->format(\"d/m/Y\") <br>";
echo $nullSafeTypeTest->returnDateTime()?->format("d/m/Y");
echo "<hr><br>";

echo "Testando retornar null returnNullDateTime()  usando null safe operator <br><br>";
echo "\$nullSafeTypeTest->returnNullDateTime()?->format(\"d/m/Y\") <br>";
$datetime = $nullSafeTypeTest->returnNullDateTime()?->format("d/m/Y");

if ($datetime == NULL) {
    echo "NULL DateTime <br>";
};

echo "<hr><br>";

/**
 * TESTING NAMED ARGUMENTS
 */
echo "Testando named arguments testReturnNamedArguments(a: 'test', b: 'test1', c: 'test2') <br><br>";
echo "\$namedArgumentsTest->testReturnNamedArguments(b: 'Fernando1', a: 'Fernando', c:'Fernando2') <br>";
echo $namedArgumentsTest->testReturnNamedArguments(b: 'Fernando1', a: 'Fernando', c:'Fernando2');
echo "<hr><br>";

/**
 *  ATTRIBUTE TEST
 */
echo "Testando attributes foo(#[ExampleAttribute] \$bar) <br><br>";
$exampleAttribute = new ExampleAttribute("TestingAttribute");
echo "\$attributeTest->foo(\$exampleAttribute) <br>";
echo $attributeTest->foo($exampleAttribute);
echo "<hr><br>";

/**
 * MATCH EXPRESSION TEST + Non-capturing catches
 */
echo "Testando attributes foo(#[ExampleAttribute] \$bar) <br><br>";
echo "\$matchExpressionTest->useMatchExpression(1) <br>";
echo $matchExpressionTest->useMatchExpression(0) . "<br>";
echo "\$matchExpressionTest->useMatchExpression(4) <br>";
echo $matchExpressionTest->useMatchExpression(4);
echo "<hr><br>";

/**
 * CONSTRUCT PROPERTY PROMOTION TEST
 */
echo "Testando constructor property promotion <br><br>";
echo "\$constructorPropertyPromotionTest->debugAttr() <br>";
echo $constructorPropertyPromotionTest->debugAttr();
echo "<hr><br>";