<?php

function checkAccount($account)
{
    $str = '/^[a-z0-9_]{6,}$/';
    if (preg_match($str,$account)) {

        echo 'dung';
    }else{
        echo 'sai';
    }
}
checkAccount('123abc_');