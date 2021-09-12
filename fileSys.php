<?php

//here will read all files and dirs
$dir = scandir(__DIR__);
print_r($dir);
//to check is dir or file we can do like this
foreach ($dir as $item){
    if (is_file($item)){
        echo "{$item } is file\n";
    }elseif(is_dir($item)){
        echo "{$item } is dir\n";
    }
 }
echo "################\n";
//to make new dir
//first thing is a name ,second is a permission
mkdir('testx',777);
//for remove using a
rmdir('testx');
//for crate recursive
//mkdir('text/test',recursive:true);

$tFile='test\foo.txt';
//check if files is exits
if (file_exists($tFile)){
    //echo size
    echo 'size is::'.filesize($tFile);
}else{
    //create new dir with permission
     @mkdir('test',777);
    //create new file if not exists
    fopen($tFile,'w');
    //write inside it
    $fileContent = file_put_contents($tFile,'test,test,test');
    //clear cache
    clearstatcache();
    //wirte the size
   echo 'size::'.filesize($tFile)."\n";
}
if (file_exists($tFile)){
    //open file for read if not exists will be error
   $fileR = fopen($tFile,'r');
   //here will get line by line
   while (($line= fgets($fileR)) !== false){
       echo  "\n".$line."\n";
   }
   fclose($fileR);
}
sleep(2);
//copy($tFile,'test');
 //here delete file
#rename('/test/foo','/test/foo2');

unlink('/test/foo2');
