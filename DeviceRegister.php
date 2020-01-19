<?php

$mc = ''.rand(1,9).''.rand(1,9).':'.rand(1,9).'9:8A:7'.rand(1,9).':'.rand(1,9).''.rand(1,9).':'.rand(1,9).''.rand(1,9).'';
$SerialNumber = ''.rand(1,9).'abd'.rand(1,9).'ec'.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).'f';
$google_aid = 'cf'.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).'ce-'.rand(1,9).''.rand(1,9).'b'.rand(1,9).'-'.rand(1,9).'c'.rand(1,9).''.rand(1,9).'-'.rand(1,9).''.rand(1,9).'1e-ac'.rand(1,9).''.rand(1,9).'bfb'.rand(1,9).''.rand(1,9).'f'.rand(1,9).''.rand(1,9).'';
$clientudid = ''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).'';
$openuduid = ''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).''.rand(1,9).'';
$osversion = ''.rand(4,5).'.'.rand(0,9).'.'.rand(0,9).'';
$appversion = '9.1.0';
$device_brand = 'samsung';
$devicemodel = 'Galaxy J';
//Device-Register Request 
$Data = array (
  'header' => 
  array (
    'serial_number' => $SerialNumber,
    'display_density' => 'mdpi',
    'tz_name' => 'America/New_York',
    'rom' => '4948239',
    'release_build' => '7f052cf_20181116',
    'resolution' => '1794x1080',
    'timezone' => '1',
    'mcc_mnc' => '20820',
    'sim_serial_number' => 
    array (
    ),
    'rom_version' => 'OPM6.171019.030.K1',
    'density_dpi' => '420',
    'device_brand' => $device_brand,
    'manifest_version_code' => '2018111632',
    'device_manufacturer' => 'LGE',
    'clientudid' => $clientudid,
    'openudid' => $openuduid,
    'update_version_code' => '2018111632',
    'os_api' => '47',
    'display_name' => 'musical_ly',
    'mc' => $mc,
    'language' => 'en',
    'build_serial' => $SerialNumber,
    'device_model' => $devicemodel,
    'google_aid' => $google_aid,
    'region' => 'US',
    'package' => 'com.zhiliaoapp.musically',
    'version_code' => '2018111632',
    'tz_offset' => '3600',
    'sim_region' => 'fr',
    'access' => 'wifi',
    'os_version' => $osversion ,
    'sdk_version' => '2.5.6.8',
    'carrier' => 'Lycamobile',
    'cpu_abi' => 'armeabi-v7a',
    'aid' => '1233',
    'app_version' => $appversion,
    'os' => 'Android',
    'not_request_sender' => 0,
    'channel' => 'wandoujia',
  ),
  '_gen_time' => time(),
  'magic_tag' => 'ss_app_log',
);
$Encoded = json_encode($Data);
    $ch = curl_init(); 
    curl_setopt($ch,CURLOPT_URL,"http://xxx.com/user/suhi_register");  //Private encryption service 
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); 
    curl_setopt($ch,CURLOPT_HEADER, false); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "json_data=".$Encoded."&id=1"); 
    $output=curl_exec($ch);
    curl_close($ch); 

    $ch = curl_init(); 
    curl_setopt($ch,CURLOPT_URL,"http://applog.musical.ly/service/2/device_register/?");  //Tiktok-Musical.ly Device Resigter Parametre
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_USERAGENT,"okhttp/3.10.0.1");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type:application/octet-stream;tt-data=a',
    'sdk-version:1',
    ));
    curl_setopt($ch,CURLOPT_HEADER, false); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $Datas); 
    $output=curl_exec($ch); 
   
   
