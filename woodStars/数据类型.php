<?php
//1.4 数据类型
// 1.4.1 标量数据类型

// 布尔型
// 布尔型是最简单的数据类型，布尔型的值只能是 TRUE 或 FALSE，不区分大小写。
// 例如：
$foo = True; // 设置 $foo 为 TRUE
$bar = FALSE; // 设置 $bar 为 FALSE

// 整型
// 整型是一个没有小数点的数字。整型的值可以是十进制、十六进制、八进制或二进制。
// 例如：
$int1 = 123; // 十进制数
$int2 = -123; // 负数
$int3 = 0123; // 八进制数 (等于十进制 83)
$int4 = 0x1A; // 十六进制数 (等于十进制 26)
$int5 = 0b11111111; // 二进制数字 (等于十进制 255)

// 浮点型
// 浮点型是带小数点的数字。
// 例如：
$float1 = 1.234;
$float2 = 10.2e3; // 10.2 * 1000
$float3 = 4e-10; // 4 * 0.0000000001

// 字符串
// 字符串是一串字符的序列，字符可以是字母、数字、空格、标点符号等。
// 字符串可以用单引号或双引号来定义。
// 例如：
$string1 = "Hello, world!";
$string2 = 'Hello, world!';
$string3 = 'This is a string';
$string4 = 'This is a string with a single quote (\')';
$string5 = "This is a string with a double quote (\")";

// NULL
// NULL 是一个特殊的数据类型，表示一个变量没有值。
// 例如：
$var1 = NULL;
$var2 = null;

// 1.4.2 复合数据类型

// 数组
// 数组是一个包含一组值的变量。数组的值可以是任何数据类型。
// 数组可以通过 array() 函数来创建。
// 例如：
$array1 = array(1, 2, 3, 4, 5);
$array2 = array("apple", "banana", "cherry");
$array3 = array(1, "apple", TRUE);

// 对象
// 对象是一个包含数据和方法的数据结构。对象的数据和方法被称为属性和方法。
// 对象可以通过类来创建。
// 例如：
class MyClass {
    public $prop1 = "I'm a class property!";
    public function getProp1() {
        return $this->prop1;
    }
}

$obj1 = new MyClass();
echo $obj1->prop1; // 输出: I'm a class property!
echo $obj1->getProp1(); // 输出: I'm a class property!

// 1.4.3 特殊数据类型

// 资源
// 资源是一个外部资源的引用，例如数据库连接、文件句柄等。
// 资源是一种特殊的数据类型，不能直接访问资源的内容。
// 例如：
$fp = fopen("test.txt", "r");

// 回调函数
// 回调函数是一个函数的引用，可以作为参数传递给其他函数。
// 回调函数可以用来实现事件处理、异步操作等。
// 例如：
function my_callback_function() {
    echo "Hello, world!";
}

call_user_func('my_callback_function'); // 输出: Hello, world!

// 1.4.4 伪类型

// 伪类型是 PHP 中的一种特殊类型，用来表示函数参数的类型。
// 例如：
function foo(array $arr) {
    // $arr 必须是一个数组
}

function bar(callable $callback) {
    // $callback 必须是一个回调函数
}

// 1.4.5 伪变量

// 伪变量是 PHP 中的一种特殊变量，用来表示特殊值。
// 例如：
$foo = NULL; // NULL 伪变量
$foo = TRUE; // TRUE 伪变量
$foo = FALSE; // FALSE 伪变量
$foo = __LINE__; // __LINE__ 伪变量
$foo = __FILE__; // __FILE__ 伪变量
$foo = __DIR__; // __DIR__ 伪变量
$foo = __FUNCTION__; // __FUNCTION__ 伪变量

// 1.4.6 类型转换

// PHP 是一种弱类型语言，变量的数据类型会根据上下文自动转换。
// 例如：
$foo = "123"; // $foo 是一个字符串
$bar = $foo + 0; // $bar 是一个整数

$foo = 123; // $foo 是一个整数
$bar = $foo . ""; // $bar 是一个字符串


//1.5 变量
// 变量是用来存储数据的容器，变量的值可以是任何数据类型。
// 变量的命名规则：

// 变量名必须以字母或下划线开头
// 变量名只能包含字母、数字和下划线
// 变量名区分大小写
// 变量名不能包含空格
// 变量名不能是 PHP 的保留关键字
// 变量的赋值：

// 变量的值可以通过赋值运算符 = 来赋值
// 变量的值可以是任何数据类型