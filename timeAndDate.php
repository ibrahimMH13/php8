<?php


$currentTime = time();
echo <<<COMMENT
IF WE WANT ADD OR SUB FOR EXAMPLE 5 DAY FOR NOW SHOULD USING CURRENT TIME
(SUB | ADD) DAYS NUMBER * 24 HOURS * 60 MIN * 60 SEC\n\n
COMMENT;
echo "result will be integer time with seconds:: $currentTime\n";
$afterFiveDay = $currentTime +5 * 24 * 60 * 60;
echo "result will be time after 5 day in seconds:: {$afterFiveDay}\n";
$beforeFiveDay = $currentTime -5 * 24 * 60 * 60;
echo "result will be time before 5 day in seconds:: {$beforeFiveDay}\n";

echo <<<COMMENTTWO

SHOULD FORMAT THE TIME TO STRING DATE ,SO WE HAVE date()  FUNCTION GET DATE AS STRING 
OR CONVERT TO PHP DATE FORMAT SUPPORT \n \n
COMMENTTWO;
echo 'get current Date for now::'.date('d/m/Y g:ia')."\n";
echo 'get current Date for after 5 days::'.date('d/m/Y g:ia',$afterFiveDay)."\n";
echo 'get current Date for before 5 days::'.date('d/m/Y g:ia',$beforeFiveDay)."\n";
echo <<<COMMENTTHREE

NOW WORK WITH TIME ZONE, BY DEFUALT WILL GET IT FROM php.ini
ALSO WE CAN EDIT OR CHANGE IT FROM CODE \n\n
COMMENTTHREE;
echo "get current time zone before change it ".date_default_timezone_get().' ::'.date('d/m/Y g:ia')."\n";
date_default_timezone_set('Europe/Istanbul');

echo 'get current now Date after change time zone to Istanbul ::'.date('d/m/Y g:ia')."\n";
echo <<<COMMENTTHREE

NOW WORK WITH STRING TO DATE,  \n\n
COMMENTTHREE;
echo "convert string LIKE 'yesterday' to date and format ".date('d/m/Y g:ia',strtotime('yesterday'))."\n";
echo "convert string LIKE 'tomorrow' to date and format ".date('d/m/Y g:ia',strtotime('tomorrow'))."\n";
