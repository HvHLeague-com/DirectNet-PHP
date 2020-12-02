<?php
 /*         ____  _                __      _   __     __ 
  *        / __ \(_)_______  _____/ /_    / | / /__  / /_
  *       / / / / / ___/ _ \/ ___/ __/   /  |/ / _ \/ __/
  *      / /_/ / / /  /  __/ /__/ /_    / /|  /  __/ /_  
  *     /_____/_/_/   \___/\___/\__/   /_/ |_/\___/\__/  
  *
  *     Direct Net Library for PHP 7.0 - 8
  *     Author: Gamania         Version: 0.1-alpha
  *     https://github.com/HvHLeague-com/DirectNet-PHP/
  */                                                
  
function file_get_contents_direct($address, $host){
$opts = stream_context_create(array(
  'http'=> array(
    'method' => 'GET',
    'header'=> 'Host: ' . $host,
  )
));
$url = $address;
return file_get_contents($url, NULL, $opts);
}

function file_get_contents_direct_async($address, $host){
	throw new Exception('Function is deprecated!');
}
