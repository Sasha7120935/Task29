<?php
$file = 'markup.html';
$result =
    file_get_contents($file);
echo $result;

$url = $_SERVER["SERVER_NAME"];
$data = array("url" => "url");
$string = http_build_query($data);
$url = "http://task2/markup.html";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
if ($output === FALSE) {
    echo "$url" . curl_error($ch);
} else {
    echo $output;
}
curl_close($ch);
?>


