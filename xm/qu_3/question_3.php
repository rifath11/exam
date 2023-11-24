<?php
function stringReplace($string) {
    if (strlen($string) > 100) {
        $string = "";
    }
    return $string;
}

$input = "This is a sample string with more than 100 characters. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$output = stringReplace($input);
echo $output;