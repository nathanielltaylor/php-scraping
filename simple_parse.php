<?php
require('simplehtmldom_1_5/simple_html_dom.php');

echo file_get_html('https://en.wikipedia.org/wiki/PHP')->plaintext;
?>
