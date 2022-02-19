<?php

/**
 * Configurations Start
 */
$fromPath = 'D:\Movies';
$new_path = 'D:\Movies'.'/';
$wantToDebug = false;
/**
 * Configurations End
 */

function getDirContents($dir, &$results = array())
{
    $files = scandir($dir);
    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }
    return $results;
}

if($wantToDebug){
    echo '<pre/>';
    print_r(getDirContents($fromPath));
    die;
}


foreach(getDirContents($fromPath) as $key => $value){
    try{
        if(strlen($value) < 3 || strlen(pathinfo($value, PATHINFO_EXTENSION)) < 3 || is_dir($value)){
            // Do Nothing
        }else{
            $ext = pathinfo($value, PATHINFO_EXTENSION);
            if (!file_exists($new_path.$ext)) {
                mkdir($new_path.$ext, 0777, true);
            }
            rename($value,$new_path.$ext.'/'.pathinfo($value, PATHINFO_BASENAME));
        }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}
echo "Operation Successfull!\n";


