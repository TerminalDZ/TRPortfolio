<?php
require 'vendor/log/Mobile_Detect.php';
require 'vendor/log/BrowserDetection.php';

function getUserIP()
{
    if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
    }

    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    return $ip;
}

$browser = new Wolfcast\BrowserDetection;
$browser_name = $browser->getName();
$browser_version = $browser->getVersion();

$detect = new Mobile_Detect();
$type = '';
$os = '';

if ($detect->isMobile()) {
    $type = 'Mobile';
} elseif ($detect->isTablet()) {
    $type = 'Tablet';
} else {
    $type = 'PC';
}

if ($detect->isiOS()) {
    $os = 'iOS';
} elseif ($detect->isAndroidOS()) {
    $os = 'Android';
} else {
    $os = 'Windows';
}

$user_ip = getUserIP();
$current_date = date("Y-m-d");

$sql = "SELECT COUNT(*) as count FROM visitor WHERE browser_name = '$browser_name' AND user_ip = '$user_ip' AND type = '$type' AND date_visited = '$current_date'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['count'] == 0) {
    $response = @file_get_contents('http://ip-api.com/php/' . $user_ip . '?fields=61439');
    
    if ($response !== false) {
        $data = unserialize($response);
    } else {
        $data = false;
    }

    if (!$data || $data['status'] == 'fail') {
        $data = array(
            'status' => 'fail',
            'message' => 'fail',
            'country' => 'fail',
            'countryCode' => 'fail',
            'regionName' => 'fail',
            'city' => 'fail',
            'zip' => 'fail',
            'lat' => 'fail',
            'lon' => 'fail',
            'timezone' => 'fail',
            'isp' => 'fail'
        );
    }

    $sql = "INSERT INTO visitor(browser_name, browser_version, type, os, user_ip, date_visited, country, countryCode, region, city, zip, latitude, longitude, timezone, isp) VALUES ('$browser_name', '$browser_version', '$type', '$os', '$user_ip', '$current_date', '".$data['country']."', '".$data['countryCode']."', '".$data['regionName']."', '".$data['city']."', '".$data['zip']."', '".$data['lat']."', '".$data['lon']."', '".$data['timezone']."', '".$data['isp']."')";
    mysqli_query($db, $sql);
}
?>
