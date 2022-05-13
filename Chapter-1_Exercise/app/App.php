<?php 

// NAMED FUNCTIONS 

function getTransactionsFile(string $dirname){

    $files = [];

    foreach (scandir($dirname) as $file) {
        if (is_dir($file)) {
            continue;
        }

        $files[] = $dirname . $file;

    }

    return $files;

}


function getTransactions(string $fileName){
    if (! file_exists($fileName)) {
        trigger_error('File' . $fileName . 'does not exist', E_USER_ERROR);
    }

    $file = fopen($fileName,'r');

    fgetcsv($file);

    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = extractAmount($transaction);
    }

    return $transactions;
    

}


function extractAmount(array $transactionRow){
    [$date,$checkNo,$desc,$amt] = $transactionRow;
    $amt = (float)str_replace(['$',','],'',$amt);

    return [
        'date' => $date,
        'checkNo' => $checkNo,
        'desc' => $desc,
        'amt' => $amt
    ];
}