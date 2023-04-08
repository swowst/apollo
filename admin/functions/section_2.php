<?php

require_once "helper.php";
require_once '../../db.php';
require_once "error.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    redirect('../section_2.php');
    return;
}
if (isset($_POST['title']) && !empty($_POST['title']) &&
    isset($_POST['text']) && !empty($_POST['text']) &&
    isset($_POST['facebook']) &&
    isset($_POST['instagram']) &&
    isset($_POST['twitter']) &&
    isset($_POST['pinterest'])){$title= $_POST['title'];



    $fileName = $_FILES['image']['full_path'];
    $folder = realpath(__DIR__."/../../uploads"). "/" . $fileName;
    if (!move_uploaded_file ($_FILES['image']['tmp_name'], $folder)){
        redirect('../section_2.php?error=file');
        return;
    }


    $text = htmlentities($_POST['text']);
    $instagram = htmlentities($_POST['instagram']);
    $facebook = htmlentities($_POST['facebook']);
    $twitter = htmlentities($_POST['twitter']);
    $pinterest = htmlentities($_POST['pinterest']);

    $section2 = getSecondSection($db);
    if ($section2){

        $fileName = $section2['image'];
        if (isset($_FILES['image']) && $_FILES['image']['error'] == null){
            $fileName = $_FILES['image']['full_path'];
            $folder = realpath(__DIR__."/../../uploads"). "/" . $fileName;
            if (!move_uploaded_file ($_FILES['image']['tmp_name'], $folder)){
                redirect('../section_2.php?error=file');
                return;
            }
        }
        updateSection($section2['id'], $db,$title,$text,$fileName,$facebook,$instagram,$twitter,$pinterest);
    }else{
        if (!isset($_FILES['image']) || empty($_FILES['image'])){
            redirect('../section_2.php?error=file');
            return;
        }

        $fileName = $_FILES['image']['full_path'];
        $folder = realpath(__DIR__."/../../uploads"). "/" . $fileName;
//        if (!move_uploaded_file ($_FILES['image']['tmp_name'], $folder)){
//            redirect('../section_2.php?error=file');
//            return;
//        }

        insertSection($db, $title, $text, $fileName, $facebook, $instagram, $twitter, $pinterest);
    }
}else{
    redirect('../section_2.php?error=data');
    return;
};




function getSecondSection($db){
    $query = $db->prepare("Select * from section_2 limit 1");
    $query->execute();
    $return = $query->fetch();
}

function insertSection($db, $title, $text, $fileName, $facebook, $instagram, $twitter, $pinterest){

    $query = $db->prepare('Insert into section_2 (title, text,facebook, instagram,twitter,pinterest,image) values (?,?,?,?,?,?,?)');
    $query->execute([$title,$text,$facebook,$instagram,$twitter,$pinterest,$fileName]);
    redirect('../section_2.php?success=true');
}

function updateSection($id,$db, $title, $text, $fileName, $facebook, $instagram, $twitter, $pinterest){
    $query = $db->prepare("Update section_2 set
    title=?,
    text = ?,
    facebook = ?,
    instagram = ?,
    twitter = ?,
    pinterest = ? ,
    image = ?,
    where id = ?");
    $query->execute([$title, $text, $facebook, $instagram, $twitter, $pinterest, $fileName, $id]);
    redirect ('../section_2.php?success=true');
}