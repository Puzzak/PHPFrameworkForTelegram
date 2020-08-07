<?php
    include "vars.php";
    define('link', 'https://api.telegram.org/bot'.token.'/');
    if (!$former) {
        $former = array();
    }
    foreach ($former as $key => &$val) {
        if (!is_numeric($val) && !is_string($val)) {
            $val = json_encode($val);
        }
    }
    $url = link.$method.'?'.http_build_query($former);
    $handle = curl_init($url);
    curl_setopt(
        $handle,
        CURLOPT_RETURNTRANSFER,
        true
    );
    curl_setopt(
        $handle,
        CURLOPT_CONNECTTIMEOUT,
        5
    );
    curl_setopt(
        $handle,
        CURLOPT_TIMEOUT,
        60
    );
    $response = curl_exec($handle);
    $http_code = intval(
        curl_getinfo(
            $handle,
            CURLINFO_HTTP_CODE
        )
    );
    curl_close(
        $handle
    );
    $response = json_decode($response, true);
    $response = $response['result'];
?>