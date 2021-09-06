<?php
$php = "8v";
$txt = <<<TEST
[HereDoc]
//this called HereDoc
here can write any text and variables and html tags like this example $php
TEST;

$txt2 = <<<'JUSTEXT'

[NowDoc]
//this called NowDOC
here cloud be just text ,$php should print as text
JUSTEXT;

echo nl2br($txt);

echo nl2br($txt2);
