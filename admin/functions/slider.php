<?php

require_once "helper.php";
require_once '../../db.php';
require_once "error.php";

$imageTypes = [1,2];



if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    redirect('../slider/create.php');
    return;
}

if ($_POST['action'] == 'create'){
    if (isset($_FILES['image']) && isset($_POST['type']) && !empty($_POST['type']) && $_FILES['image']['error'] == null){
        $type = (int)$_POST['type'];
        if (!in_array($type,$imageTypes)){
            redirect('../slider/create.php?error=file');
            return;
        }
        $fileName = $_FILES['image']['full_path'];
        $folder = realpath(__DIR__."/../../uploads"). "/" . $fileName;
        if (!move_uploaded_file ($_FILES['image']['tmp_name'], $folder)){
            redirect('../slider/create.php?error=file');
            return;
        }

        $query = $db->prepare('Insert into slider (image, type) values (?,?)');
        $query->execute([$fileName, $_POST['type']]);
        redirect('../slider/index.php?success=true');




    }else{
        redirect('../slider/create.php?error=data');
        return;
    };
}else if ($_POST['action'] == 'update'){
    if (isset($_FILES['image']) && isset($_POST['type']) && !empty($_POST['type']) && $_FILES['image']['error'] == null && isset($_POST['id'])  && !empty($_POST['id']) ){
        $type = (int)$_POST['type'];
        $id = (int)$_POST['id'];
        if (!in_array($type,$imageTypes)){
            redirect('../slider/update.php?error=file');
            return;
        }
        $fileName = $_FILES['image']['full_path'];
        $folder = realpath(__DIR__."/../../uploads"). "/" . $fileName;
        if (!move_uploaded_file ($_FILES['image']['tmp_name'], $folder)){
            redirect('../slider/update.php?error=file');
            return;
        }

        $query = $db->prepare('Update slider set image = ?, type = ? where id = ?');
        $query->execute([$fileName, $_POST['type'], $id]);
        redirect('../slider/update.php?success=true');




    }else{
        redirect('../slider/update.php?error=data');
        return;
    };
}



























