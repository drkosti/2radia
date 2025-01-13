<?php

function getShoutcastStats($ip, $port, $sid, $key, $name_dj = '')
{
    // Inicjalizacja cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://$ip:$port/stats?sid=$sid&json=1");
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (PortalRadiowy.pl)');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);

    $curl_exec = curl_exec($ch);
    $json = ($curl_exec ? json_decode(iconv('UTF-8', 'UTF-8//IGNORE', $curl_exec)) : false);
    curl_close($ch);

    if ($key === 'streamstatus') {
        if ($json === false) {
            return 0;
        } elseif ($json->streamstatus == 0) {
            return 1;
        } else {
            return 2;
        }
    } elseif (isset($json->$key) && $key === 'dj' && !empty($name_dj)) {
        $dj_json = json_decode(substr(preg_replace('/\},[\s]*\{/', ',', preg_replace(array('/\([\s]*"/', '/"[\s]*\)/', '/"[\s]*,/'), array('{"', '"}', '":'), preg_replace_callback('/\\(\d+)/m', function ($matches) {
            return iconv('Windows-1250', 'UTF-8//IGNORE', chr($matches[1]));
        }, $json->dj))), 1, -1));

        if (isset($dj_json->$name_dj)) {
            return htmlspecialchars($dj_json->$name_dj);
        }
    } elseif (isset($json->$key)) {
        return htmlspecialchars($json->$key);
    }

    return '';
}
