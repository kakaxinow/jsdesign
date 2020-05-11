<?php

//将匿名函数在普通函数中当做参数传入，也可以被返回。这就实现了一个简单的闭包。
//在函数里定义一个匿名函数，并且调用它
//https://learnku.com/articles/4698/laravel-core-ioc-service-container
function printStr()
{
    $func = function ($str) {
        echo $str;
    };

    $func('some string');
}

//printStr();


//把匿名函数当做参数传递，并且调用它

function callFunc($func)
{
    $func('some string');
}

$printStrFunc = function ($str) {
    echo $str;
};

//print_r(callFunc( $printStrFunc ));

//闭包内变量通过use关键字传入
function getMoney()
{
    $rmb    = 1;
    $dollar = 6;

    $func = function () use ($rmb, $dollar) {
        echo $rmb . "<br/>";
        echo $dollar;
    };

    $func();
}

//getMoney();
function demo1()
{
    $rmb  = 10;
    $func = function () {
        echo $rmb;
    };
    $func();
}

//demo11();


//这里的A()永远没有办法用来作为B的参数，因为A它并不是“匿名”函数。
function A()
{
}

$f = function () {
    return 100;
};
function B(Closure $callback)
{
    return $callback();
}

$a = B($f);
//print_r($a);//输出100


//class A {
//    private static $sfoo = 1;
//    private $ifoo = 2;
//}
//$cl1 = static function() {
//    return A::$sfoo;
//};
//$cl2 = function() {
//    return $this->ifoo;
//};
//
//$bcl1 = Closure::bind($cl1, null, 'A');
//$bcl2 = Closure::bind($cl2, new A(), 'A');
//echo $bcl1(), "\n";//输出 1
//echo $bcl2(), "\n";//输出 2


class A {
    public $base = 100;
}

class B {
    private $base = 1000;
}
class C {
    private static $base = 10000;
}

$f = function () {
    return $this->base + 3;
};

$sf = static function() {
    return self::$base + 3;
};

$a = Closure::bind($f, new A);
print_r($a());//这里输出103,绑定到A类
echo PHP_EOL;

$b = Closure::bind($f, new B , 'B');
print_r($b());//这里输出1003，绑定到B类
echo PHP_EOL;

$c = $sf->bindTo(null, 'C'); //注意这里：使用变量#sf绑定到C类，默认第一个参数为null
print_r($c());//这里输出10003




