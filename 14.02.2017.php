<?php
############## Question 1:
$a = 0;
$b = "0";
$c = null;

if ($a == $b) {
    echo "1";
}
if ($b == $c) {
    echo "2";
}
if ($a == $c) {
    echo "3";
}

// Output is:
// ------------------------------------------------------
############## Question 2:
$x = 0;
if ($y = $x) {
    echo "One";
} else {
    echo "Two";
}

// Output is:
// ------------------------------------------------------
############## Question 3:
$a = true;
$b = 1;
$c = "foo";

if ($a == $b || $b == $c && $c === $a) {
    echo "one";
} else {
    echo "two";
}

// Output is:
// ------------------------------------------------------
############## Question 4:
$a = '1';
$b = &$a;
$b = "2$b";
echo $a . ", " . $b;

// Output is:
// ------------------------------------------------------
############## Question 5:
$arr = ['w', 'o', 'r', 'l', 'd'];
$arr2 = [];

// Expected: $arr2 = ['d','l','r','o','w'];
// ------------------------------------------------------
############## Question 6:
$i = 5;
$a = $i++; // a = ?

$i = 5;
$a = ++$i; // a = ?

// ------------------------------------------------------
############## Question 7:
$haystack = "some string";
$needle = "som";

if (!strpos($haystack, $needle)) { // <== what's wrong here?
    throw new \Exception('Substring not found');
}

// ------------------------------------------------------
############## Question 8:
$a = [1, 2, 3, 4];
echo array_pop($a);
array_unshift($a, 10);
echo array_shift($a);
array_push($a, 12);

// Output is:
//
//
//
############## Question 9:
$i = 5 << 3; // $i = ?
$i = 6 | 4;  // $i = ?
$i = 12 & 10;  // $i = ?
$i = 6 ^ 3;  // $i = ?
$i = ~32;  // $i = ?

// ------------------------------------------------------
############## Question 10:
$a = 0.1;
$b = 0.2;
$c = 0.3;
$d = $a + $b;

if ($d === $c) {
    echo 'true';
} else {
    echo 'false';
}

//
// ------------------------------------------------------
############## Question 11:
class SomeClass
{
    protected $_someMember;

    public function __construct()
    {
        $this->_someMember = 1;
    }

    public static function getSomethingStatic()
    {
        return $this->_someMember * 5;
    }
}


// ------------------------------------------------------
############## Question 12:
class A
{
    public static function doTest()
    {
        return static::test();
    }

    protected static function test()
    {
        return 'A';
    }
}

class B extends A
{
    protected static function test()
    {
        return 'B';
    }
}

echo B::doTest();

// ------------------------------------------------------
############## Question 13:

class User
{
    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new User();
        }
        return $inst;
    }

    private function __construct()
    {
    }

}


$a = User::Instance();
$b = clone $a;
$c = unserialize(serialize($a));







