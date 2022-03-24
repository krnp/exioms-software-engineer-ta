<?php

function missing_numbers($num_arr) {
       return $num_arr;
}

class Test {

    public static function test_1() {
       assert(missing_numbers([0, 1, 3]) == [2], new Exception('FAILED: missing_numbers([0, 1, 3]) should equal [2]'));
       return 1; 
    }
    
    public static function test_2() {
       assert(missing_numbers([10, 11, 14, 17]) == [12, 13, 15, 16], new Exception('FAILED: missing_numbers([10, 11, 14, 17]) should equal [ 12, 13, 15, 16 ]'));
       return 1;  
    }

    public static function test_3() {
        assert(missing_numbers([3, 7, 9, 19]) == [
            4,
            5,
            6,
            8,
            10,
            11,
            12,
            13,
            14,
            15,
            16,
            17,
            18,
        ], new Exception('FAILED: missing_numbers([3, 7, 9, 19]) should equal [ 4, 5, 6, 8, 10, 11, 12, 13, 14, 15, 16, 17, 18 ]'));
        return 1;  
     }
}   
if (!debug_backtrace()) {
$tests = 0;
$tests += Test::test_1();
$tests += Test::test_2();
$tests += Test::test_3();
echo($tests."/3 tests passed!");   
}

?>
