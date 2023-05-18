<?php

require_once '../vendor/autoload.php';

use Pj8912\PhpBardApi\Bard;

$_ENV['_BARD_API_KEY'] = "INPUT_YOUR_KEY";
$bard = new Bard();
$input_text = "Hello, Bard!";
$result = $bard->get_answer($input_text); 
$content = $result["content"];
print($content);