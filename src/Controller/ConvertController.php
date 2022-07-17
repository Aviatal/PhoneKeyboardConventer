<?php

declare(strict_types=1);

namespace App\Controller;

require_once('AbstractController.php');


use App\Controller\AbstractController;

class ConvertController extends AbstractController
{
    public function run():void
    {   
        $action = $this->action() . "Action";
        $this->$action();
    }
    public function convertFormAction()
    {
        $this->view->render('convertForm', []);
    }
    public function convertAction()
    {
        $type = $this->request->postParam('type');
        $text = $this->request->postParam('text');

        if(!empty($type) && !empty($text)) {
            if($type === "toNumeric") {
                $viewParams = [
                    'message' => $this->convertToNumeric($text),
                    'beforeConversion' => $text 
                ];
                $this->view->render('show', $viewParams);
            } else {
                $viewParams = [
                    'message' => $this->convertToString($text),
                    'beforeConversion' => $text 
                ];
                $this->view->render('show', $viewParams);
            }
        }
    }
    private function convertToString($text)
    {
        $array = explode(",", $text);
        $message = "";
        foreach($array as $value)
        {
            switch($value)
            {
                case "1":
                    $message .= ".";
                break;
                case "11":
                    $message .= ",";
                break;
                case "111":
                    $message .= "?";
                break;
                case "1111":
                    $message .= "!";
                break;
                case "2":
                    $message .= "a";
                break;
                case "22":
                    $message .= "b";
                break;
                case "222":
                    $message .= "c";
                break;
                case "2222":
                    $message .= "A";
                break;
                case "22222":
                    $message .= "B";
                break;
                case "222222":
                    $message .= "C";
                break;
                case "3":
                    $message .= "d";
                break;
                case "33":
                    $message .= "e";
                break;
                case "333":
                    $message .= "f";
                break;
                case "3333":
                    $message .= "D";
                break;
                case "33333":
                    $message .= "E";
                break;
                case "333333":
                    $message .= "F";
                break;
                case "4":
                    $message .= "g";
                break;
                case "44":
                    $message .= "h";
                break;
                case "444":
                    $message .= "i";
                break;
                case "4444":
                    $message .= "G";
                break;
                case "44444":
                    $message .= "H";
                break;
                case "444444":
                    $message .= "I";
                break;
                case "5":
                    $message .= "j";
                break;
                case "55":
                    $message .= "k";
                break;
                case "555":
                    $message .= "l";
                break;
                case "5555":
                    $message .= "J";
                break;
                case "55555":
                    $message .= "K";
                break;
                case "555555":
                    $message .= "L";
                break;
                case "6":
                    $message .= "m";
                break;
                case "66":
                    $message .= "n";
                break;
                case "666":
                    $message .= "o";
                break;
                case "6666":
                    $message .= "M";
                break;
                case "66666":
                    $message .= "N";
                break;
                case "666666":
                    $message .= "O";
                break;
                case "7":
                    $message .= "p";
                break;
                case "77":
                    $message .= "q";
                break;
                case "777":
                    $message .= "r";
                break;
                case "7777":
                    $message .= "s";
                break;
                case "7777":
                    $message .= "P";
                break;
                case "77777":
                    $message .= "Q";
                break;
                case "777777":
                    $message .= "R";
                break;
                case "7777777":
                    $message .= "S";
                break;
                case "8":
                    $message .= "t";
                break;
                case "88":
                    $message .= "u";
                break;
                case "888":
                    $message .= "v";
                break;
                case "8888":
                    $message .= "T";
                break;
                case "88888":
                    $message .= "U";
                break;
                case "888888":
                    $message .= "V";
                break;
                case "9":
                    $message .= "w";
                break;
                case "99":
                    $message .= "x";
                break;
                case "999":
                    $message .= "y";
                break;
                case "9999":
                    $message .= "z";
                break;
                case "9999":
                    $message .= "W";
                break;
                case "99999":
                    $message .= "X";
                break;
                case "999999":
                    $message .= "Y";
                break;
                case "9999999":
                    $message .= "Z";
                break;
                case "0":
                    $message .= " ";
                break;
                default:
                    return "Poddałeś jakąś nieprawidłową wartość";
                break;
            }
        }
        return $message;
    }
    private function convertToNumeric(string $text) :string
    { 
        $message = "";
        $array = str_split($text, 1);
        foreach($array as $value)
        {
            switch($value)
            {
                case ".":
                    $message .= "1,";
                break;
                case ",":
                    $message .= "11,";
                break;
                case "?":
                    $message .= "111,";
                break;
                case "!":
                    $message .= "1111,";
                break;
                case "a":
                    $message .= "2,";
                break;
                case "b":
                    $message .= "22,";
                break;
                case "c":
                    $message .= "222,";
                break;
                case "A":
                    $message .= "2222,";
                break;
                case "B":
                    $message .= "22222,";
                break;
                case "C":
                    $message .= "222222,";
                break;
                case "d":
                    $message .= "3,";
                break;
                case "e":
                    $message .= "33,";
                break;
                case "f":
                    $message .= "333,";
                break;
                case "D":
                    $message .= "3333,";
                break;
                case "E":
                    $message .= "33333,";
                break;
                case "F":
                    $message .= "333333,";
                break;
                case "g":
                    $message .= "4,";
                break;
                case "h":
                    $message .= "44,";
                break;
                case "i":
                    $message .= "444,";
                break;
                case "G":
                    $message .= "4444,";
                break;
                case "H":
                    $message .= "44444,";
                break;
                case "I":
                    $message .= "444444,";
                break;
                case "j":
                    $message .= "5,";
                break;
                case "k":
                    $message .= "55,";
                break;
                case "l":
                    $message .= "555,";
                break;
                case "J":
                    $message .= "5555,";
                break;
                case "K":
                    $message .= "55555,";
                break;
                case "L":
                    $message .= "555555,";
                break;
                case "m":
                    $message .= "6,";
                break;
                case "n":
                    $message .= "66,";
                break;
                case "o":
                    $message .= "666,";
                break;
                case "M":
                    $message .= "6666,";
                break;
                case "N":
                    $message .= "66666,";
                break;
                case "O":
                    $message .= "666666,";
                break;
                case "p":
                    $message .= "7,";
                break;
                case "q":
                    $message .= "77,";
                break;
                case "r":
                    $message .= "777,";
                break;
                case "s":
                    $message .= "7777,";
                break;
                case "P":
                    $message .= "77777,";
                break;
                case "Q":
                    $message .= "777777,";
                break;
                case "R":
                    $message .= "7777777,";
                break;
                case "S":
                    $message .= "77777777,";
                break;
                case "t":
                    $message .= "8,";
                break;
                case "u":
                    $message .= "88,";
                break;
                case "v":
                    $message .= "888,";
                break;
                case "T":
                    $message .= "8888,";
                break;
                case "U":
                    $message .= "88888,";
                break;
                case "V":
                    $message .= "888888,";
                break;
                case "w":
                    $message .= "9,";
                break;
                case "x":
                    $message .= "99,";
                break;
                case "y":
                    $message .= "999,";
                break;
                case "z":
                    $message .= "9999,";
                break;
                case "W":
                    $message .= "99999,";
                break;
                case "X":
                    $message .= "999999,";
                break;
                case "Y":
                    $message .= "9999999,";
                break;
                case "Z":
                    $message .= "99999999,";
                break;
                case " ":
                    $message .= "0,";
                break;
                default:
                return "Poddałeś jakąś nieprawidłową wartość";
                break;
            }
        }
            
        return substr($message,0,-1);
    }

}
