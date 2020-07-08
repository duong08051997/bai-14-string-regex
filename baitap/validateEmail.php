<?php


function checkEmail($email)
{
    $pattern ='/^\w+@\w+.[a-z]+$/';
    if (preg_match($pattern,$email)) {
        echo 'email hop le';
    }else{
        echo 'email khong hop le';
    }

}
checkEmail('a@gmail.c');
