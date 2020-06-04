<?php

/**
 * Bing每日图片API调用
 */
function bingEverydayImg( int $day=0, bool $switch=true)
    {
        if($switch != true)
        {
            $n = rand(0,7);
        }else{
            $n = $day;
        }

        $bingImgUrl = 'http://www.bing.com/HPImageArchive.aspx?format=js&idx='.$n.'&n=1';
        $bingImgApi = json_decode(file_get_contents($bingImgUrl), true);
        return $bingImgApi;
    }