<?php
/*
 * HTTP requests splitter for Ecwid ION calls
 *
 * Github repository: https://github.com/makfruit/ecwid_ion_splitter
 * Ecwid: http://www.ecwid.com
 * Ecwid ION docs: http://kb.ecwid.com/w/page/43696516/Instant%20Order%20Notifications
 */

// Endpoint URLs
$endpoints = array(
  'http://google.com',
  'http://yahoo.com'
);

// Init and configure CURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));
curl_setopt($ch, CURLOPT_TIMEOUT, 100);

foreach ($endpoints as $url) {
  // Set request URL
  curl_setopt($ch, CURLOPT_URL, $url);
  
  // Make an HTTP request
  curl_exec($ch);
}

// Close connection
curl_close($ch);

?>