
<?php require_once 'header.php'?>
<?php require_once "../db.php"?>
<?php require_once "./functions/error.php" ?>
<?php require_once "./functions/helper.php"?>
<div>
    <h1>Section 1</h1>


    <?php
    $query=$db->prepare('Select * from section_1 limit 1');
    $query->execute();
    $section = $query->fetch();

    ?>



    <form action="./functions/section_1.php" method="POST">
        <input type="text" name="title" placeholder="Enter title">
        <br>
        <br>
        <textarea name="text" placeholder="Enter text"></textarea>
        <br>
        <br>
        <button>Save</button>
    </form>
</div>
<?php require_once 'footer.php'?>
