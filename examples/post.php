<?php
//require_once 'PEAR2/HTTP/Request/AllFiles.php';

// to run from svn checkout
require_once '../src/HTTP/Request/allfiles.php';

$request = new PEAR2_HTTP_Request('http://bluga.net/post.php');
$request->body = array('test1'=>'value1','test2'=>'value2');

$response = $request->sendRequest();

var_dump($response->code);
var_dump($response->headers);
var_dump($response->body);
