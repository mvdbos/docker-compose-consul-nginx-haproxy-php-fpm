<?php

// Call the script that calls the PHP-FPM status page
exec('fcgi-status-script.sh', $output);

// Set headers
header("Content-type:text/plain");

// We dont want to output the HTTP headers from the PHP-FPM status.
// The actual body is in the last element of the output array
$json = json_decode(end($output), true);

$text = '';
foreach ($json as $key => $value) {
    $key = str_replace(" ", "_", $key);
    if (is_numeric($value)) {
        $text .= "$key $value\n";
    }
}
echo $text;
