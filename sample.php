<?php

$request = new HttpRequest();
$request->setUrl('https://oauth.talknote.com/oauth/token');
$request->setMethod(HTTP_METH_POST);

$request->setQueryData(array(
  'redirect_uri' => 'https://erstezeile.com',
  'client_id' => 'bc38b6979ace90117b4f19f7a78fc01a49b2c528',
  'client_secret' => '22ea7e23a4a0aa8e2196509ec9d0df8a81866369',
  'code' => 'JLQWMNppSvaIgVCmwBJGCw',
  'grant_type' => 'authorization_code'
));

$request->setHeaders(array(
  'Postman-Token' => 'ad1aad33-dc55-4e0b-b2e1-dfbf20bb4e6e',
  'cache-control' => 'no-cache'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
?>