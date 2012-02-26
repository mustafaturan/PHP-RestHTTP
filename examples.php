<?php
// load dependencies
require_once dirname(__FILE__) . "/RestHttp/Client.php";

// setup client
$client   = new RestHttp\Client("http://search.twitter.com");

// make request
// tip: use post/put/delete instead of $client->get
$response = $client->get('/search.json', null, array('q' => "rest http php"));

// see results as text
header("Content-type: text/plain");

// echo results
echo "---------------------------------------\n";
echo $response['http_code'];
echo "\n\n\n";

echo "---------------------------------------\n";
echo $response['header'];
echo "\n\n\n";

echo "---------------------------------------\n";
echo $response['body'];

// close
$client   = null;
?>