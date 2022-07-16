<?php
declare(strict_types=1);

namespace App;
use App\PhoneKeyboardConventer;

require_once("PhoneKeyboardConventer.php");

$text = $_GET["text"];
$type = $_GET["type"];


if($text){
    if($type == "toString")
    {
        $convert = new PhoneKeyboardConventer();
        echo $convert->convertToString($text);
    } else {
        $convert = new PhoneKeyboardConventer();
        echo $convert->convertToNumeric($text);
    }
} else{
    echo "Nic nie zostało przesłane";
}


