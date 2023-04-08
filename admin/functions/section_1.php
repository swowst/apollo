<?php

require_once "helper.php";
require_once '../../db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    redirect('../index.php');
    return;
}

if (isset($_POST['title']) && isset($_POST['text']) && !empty($_POST['title']) && $_POST['text']){
    $title = htmlentities($_POST['title']);
    $text = htmlentities($_POST['text']);

    $section = getFristSection($db);
    if ($section){
        updateSection($section['id'], $db,$title,$text);
    }else{
        insertSection($db, $title, $text);
    }


}else{
    redirect('../index.php?error=data');
    return;
};



function getFristSection($db){
    $query = $db->prepare("Select * from section_1 limit 1");
    $query->execute();
    $return = $query->fetch();
}

function insertSection($db, $title, $text){
    $query = $db->prepare('Insert into section_1 (title, text) values (?,?)');
    $query->execute([$title,$text]);
    redirect('../index.php?success=true');
}

function updateSection($id,$db, $title, $text){
    $query = $db->prepare('Update into section_1 set title= ?, text = ? where id = ?');
    $query->execute([$title,$text, $id]);
    redirect('../index.php?success=true');
}