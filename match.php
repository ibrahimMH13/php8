<?php

#match is Expression type so we can store in variable , match should have default case
#also we can have many option with one case or operations
#const subject_expression =true ;//should 1;
#const subject_expression =2;//should great than 1;
const subject_expression =000;//should 0;
//if we donot set default will be error
$return_value = match (subject_expression) {
    1 === 1 => 1,
    2,3=>'great than 1',
   default => 0,
};
echo $return_value;
