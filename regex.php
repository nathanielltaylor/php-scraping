<?php
$curl = curl_init('https://en.wikipedia.org/wiki/PHP');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$page = curl_exec($curl);

if (curl_errno($curl)) {
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}

curl_close($curl);

$pattern = '/<div id="mw-content-text"(.*?)</html>/s';
if (preg_match($pattern, $page, $list))
    echo $list[0];
else
    print "Requested element is not on the page";
?>
