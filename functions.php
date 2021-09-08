<?php

function sum(int|float ...$number):int|flat{
        return array_sum($number);
}
# variable function
//first way to call
echo sum(1,2,3,4,5);

//sacend way
$x ='sum';
echo "\n".$x(1,2,3,45,6);
$z = 'sub';

    if (is_callable($z)){
        echo "\nyes";
    }else{
        echo "\nno";
    }
# anonymous function
$w = function (int|float ...$number):int|float{
       return array_sum($number);
};
   echo "\n".$w(1,2,3,7,8);
#arrow function
$arr =[1,2,3,4,5];
$y =5;
//arrow function can access parent scope variable without using (use) word -directly
// arrow function just single line expression
print_r(array_map(fn($number)=>$number*($number+5),$arr));
