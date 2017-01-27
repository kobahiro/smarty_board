<?php

function isNumeric($str) {
    # $strの中に0-9があるか
    if (!preg_match("/^[0-9]+$/", $str)) {
        # 半角数字以外が含まれていた場合、false
        return false;
    }
    return true;
}

//半角英数字のみ
function is_alnum($text) {
    if (!preg_match("/^[a-zA-Z0-9]+$/",$text)) {
        return false;
    } else {
        return true;
    }
}

function str_count($str, $count, $type) {
    if($type === "equal"){
        if (mb_strlen($str) === $count) {
            return true;
        } else {
            return false;
        }
    }else if($type === "more") {
        if (mb_strlen($str) > $count) {
            return true;
        } else {
            return false;
        }
    }else if($type === "less"){
        if (mb_strlen($str) < $count) {
            return true;
        } else {
            return false;
        }
    }
}