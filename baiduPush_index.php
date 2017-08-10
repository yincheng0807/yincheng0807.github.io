<?php 
$urls = array(
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
    'http://www.oneonecity.xyz/',
);
$api = 'http://data.zz.baidu.com/urls?site=www.oneonecity.xyz&token=dpaCInJaGyEr2qHw';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
print_r($result);

 ?>