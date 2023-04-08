<?php require_once 'header.php'?>
<?php require_once "../db.php"?>
<?php require_once "./functions/error.php" ?>
<?php require_once "./functions/helper.php"?>
<div>
    <h1>Section 4</h1>

    <?php
    $querySection4=$db->prepare('Select * from section_4 limit 1');
    $querySection4->execute();
    $section = $querySection4->fetch();
    ?>

    <form action="./functions/section_4.php" method="POST">
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

