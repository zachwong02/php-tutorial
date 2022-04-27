<?php 

// require

// include '18.1-file.php'; #doesn't stop code execution

// require '18.1-file.php'; #stops code execution

// require_once '18.1-file.php'; # only include the file once 


ob_start();

include '18.1-file.php';

$nav = ob_get_clean();

$nav = str_replace('About','About Us',$nav);

echo $nav;