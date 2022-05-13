<?php


echo __DIR__;                                           # current directory 
$dir = scandir(__DIR__);                                # scan the files within the directory

print_r($dir);




mkdir('foo');                                           # creates a directory

if (file_exists('foo.txt')) {                           # check whether file exists
    echo filesize('foo.txt');                           # prints the file size

    file_put_contents('foo.txt','hello world');
    clearstatcache(); 


}else{
    echo " file not found"; 
}


sleep(5);

rmdir('foo');                                           # removes a directory




$file = fopen('foo.txt','r');                           # opens a file 

while($line = fgets($file) !== false ){                 # "fgets()" gets a line from the file, "fgetscsv()" gets contents from csv file and returns as array
    echo $line . " ";
}

fclose($file);                                          # closes the file  





file_get_contents('foo.txt', offset: 3, length:2);      

// file_put_contents('bar.txt',"hello",FILE_APPEND);    # puts content in to file, if it doesn't exists it creates the file


unlink('bar.txt');                                      # deletes file


copy('bar.txt','foo.txt');                              # copys file
rename('bar.txt','foo.txt');                            # renames file


info


 