<?php

function redirect($url){
    header("Location: $url");
    return;
}

function getImage($name){
    return "http://localhost/apollo/uploads/$name";
}

