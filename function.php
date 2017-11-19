<?php

$fileName = 'example.txt';
$fileData = 'example.txt';
$rights = 'w';

if (fileGetContents($fileName, $fileData, $rights)) {
    echo 'Save complete';
}    else {
        echo 'Save failed';
    }


$respone = fileGetContents($fileName, $fileData, $rights = NULL);

/**
 * Put data to some file with some rights.
 *
 * @param string (optional) $fileName
 * @param string $fileData
 * @param string $rights
 * @return bool
 */
function fileGetContents($fileName, $fileData, $rights = 'w')
{

    //делает попытка создать его
    $fp = fopen($fileName, $rights);
    //запись в файл текста
    fwrite($fp, $fileData);
    //закрываем
    fclose($fp);

    return true;
}


?>