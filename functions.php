<?php
$arrSign = [
    "letter" => "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",
    "sign" => "-_.:,;à°ò@+*]}[{^'?=)(/&%$!\|",
    "numb" => "1234567890",
];
$calcBtn = false;
$lPass = $_GET["lPass"] ?? '';
echo $lPass;
$repeat = $_GET["rep"] ?? 0;
$opt = $_GET["opt"] ?? [];
var_dump($opt);

function passCreator($sign, $lPass, $repeat, $opt) {
    $signSplit= array();
    $newPass = '';
    foreach ($opt as $value) {
        if (array_key_exists($value, $sign) == true) {
            array_push($signSplit, $sign[$value]);
        }        
    };
    implode('', $signSplit);
    for ($i=0; $i < $lPass; $i++) { 
        $randN = rand(0, count($signSplit));
        $newPass += $signSplit[$randN];
        if ($repeat == true) {
            array_splice($signSplit, $randN, 1, []);
        };
    };
};
?>