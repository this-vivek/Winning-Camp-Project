<?php

function set_bgColor($color){
    $ret_value="";
    switch($color){
        case "Purple":
            $ret_value= "rgb(114, 28, 114)";
            break;
        case "Yellow":
            $ret_value="rgb(212, 212, 87)";
            break;
        case "Black":
            $ret_value="rgb(33, 33, 33)";
            break;
        case "White":
            $ret_value="White";
            break;
        default:
        $ret_value="rgb(33, 33, 33)";
    }
    return $ret_value;
}


function set_fontFamily($font){
    $ret_value="";
    switch($font){
        case "Times New Roman":
            $ret_value= "'Times New Roman', Times, serif";
            break;
        case "Arial":
            $ret_value="rgb(212, 212, 87)";
            break;
        case "Courier New":
            $ret_value="'Hind Siliguri', sans-serif";
            break;
        case "cursive":
            $ret_value="'Pacifico', cursive";
            break;
        default:
        $ret_value="'Pacifico', cursive";
    }
    return $ret_value;
}

?>